<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Session;
use App\Models\connection;
use App\Models\about;
use App\Models\products;
use App\Models\registration;
use App\Models\booking;
use App\Models\Payment;
use Mail;

class userController extends Controller
{
    public function indexs()
    {
        return view('user.indexs');
    }
    public function connection()
    {
        $id = session('sessid');
        $user = connection::where('userid', $id)->value('userid');
        if ($user == "") {
            $data['con'] = registration::where('id', $id)->get();
            return view('user.connection', $data);
        } 
    }
    public function connectionaction(Request $req)
    {

        $firstname = $req->input('firstname');
        $lastname = $req->input('lastname');
        $email = $req->input('email');
        $phonenumber = $req->input('phoneno');
        $contactnumber = $req->input('contactno');
        $idtype = $req->input('idtype');
        $idnumber = $req->input('idnumber');
        $idproof = $req->file('idproof');
        $filename = $idproof->getClientOriginalName();
        $idproof->move(public_path() . '/idproof/', $filename);
        $id = session('sessid');

        $data = [
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,
            'phoneno' => $phonenumber,
            'contactno' => $contactnumber,
            'idtype' => $idtype,
            'idnumber' => $idnumber,
            'idproof' => $filename,
            'userid' => $id
        ];
        connection::insert($data);

        return redirect('/viewconnection');
    }
    public function abouts()
    {

        $data['res'] = about::get();
        return view('user.abouts', $data);
    }

    public function newbooking()
    {

        $data['res'] = products::get();

        return view('user.newbooking', $data);
    }

    public function myprofile()
    {
        $id = session('sessid');
        $data['profile'] = registration::where('id', $id)->get();
        return view('user.myprofile', $data);
    }
    public function updatesaction(Request $req, $id)
    {
        $firstname = $req->input('firstname');
        $lastname = $req->input('lastname');
        $dateofbirth = $req->input('dateofbirth');
        $address = $req->input('address');
        $email = $req->input('email');
        $contactnumber = $req->input('contactno');

        $city = $req->input('city');
        $district = $req->input('district');
        $state = $req->input('state');
        $areapincode = $req->input('pin');
        $username = $req->input('username');
        $password = $req->input('password');
        $data = [
            'firstname' => $firstname,
            'lastname' => $lastname,
            'dateofbirth' => $dateofbirth,
            'address' => $address,
            'email' => $email,
            'contactno' => $contactnumber,

            'city' => $city,
            'district' => $district,
            'state' => $state,
            'pin' => $areapincode,
            'username' => $username,
            'password' => $password
        ];
        registration::where('id', $id)->update($data);
        return redirect('/myprofile');
    }
    public function booking($id)
    {
        $id = session('sessid');
        $data['bok'] = products::where('id', $id)->get();
        $user = connection::where('userid', $id)->where('status', 'approve')->value('id');
        if ($user == "") {
            return redirect('/indexs')->with('jsAlert', 'No connection');
        } else {

            return view('user.booking', $data);
        }
    }
    public function bookingaction(Request $req)
    {


        $cylindername = $req->input('name');
        $cylinderid = $req->input('cylinderid');
        $cylinderprice = $req->input('price');
        $description = $req->input('description');
        $payments = $req->input('payments');
        $id = session('sessid');

        $data = [

            'name' => $cylindername,
            'cylinderid' => $cylinderid,
            'price' => $cylinderprice,
            'description' => $description,
            'payments' => $payments,
            'userid' => $id

        ];
        $book = booking::where('userid', $id)->where('status', '!=', "payment recieved")->value('id');
        if ($book == "") {
            booking::insert($data);
            return redirect('/viewsbooking');
        } else {
            return redirect('/viewsbooking')->with('jsAlert', 'already booked');;
        }
    }
    public function viewsbooking()
    {
        $id = session('sessid');
        $data['viewbok'] = booking::where('userid', $id)->get();
        return view('user.viewsbooking', $data);
    }
    public function viewconnection()
    {
        $id = session('sessid');
        $data['viewcon'] = connection::where('userid', $id)->get();
        return view('user.viewconnection', $data);
    }
    public function logout(Request $req)

    {

        $req->session()->forget('sess');

        return redirect('/');
    }
    public function proceedtopayment($id)
    {
        $id = session('sessid');
        $data['viewbook'] = booking::where('userid', $id)->get();
        return view('user.proceedtopayment', $data);
    }
    public function proceedtopaymentaction(Request $req, $id)
    {
        // echo $id;
        // exit();
        $userid = session('sessid');
        $cardholder = $req->input('cardholder');
        $cvv = $req->input('cvv');
        $card_number = $req->input('card_number');
        $expiry = $req->input('expiry');
        $price = booking::where('id', $id)->value('price');
        $data = [
            'userid' => $userid,
            'bookingid' => $id,
            'cvv' => $cvv,
            'card_number' => $card_number,
            'expiry' => $expiry,
            'price' => $price,
            'cardholder' => $cardholder
        ];
        Payment::insert($data);
        $update = ['status' => "payment recieved"];
        booking::where('id', $id)->update($update);
        $fname = registration::where('id', $userid)->value('firstname');
        $lname = registration::where('id', $userid)->value('lastname');
        $email = registration::where('id', $userid)->value('email');

        // $mail = [
        //     'fname' => $fname,
        //     'lname' => $lname,
        //     'id' => $id,
        //     'type' => "Online payment",
        //     'status' => "payment recieved"
        // ];

        // $user['to'] = $email;
        // Mail::send('user.paymentemail', $mail, function ($message) use ($user) {
        //     $message->to($user['to']);
        //     $message->subject('PAYMENT ALERT FROM BHARATH GAS');
        // });
        return redirect('/viewsbooking')->with('paymentalert', 'Payment Succesfull');
    }
}
