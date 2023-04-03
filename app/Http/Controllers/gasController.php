<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Http\Response;

use App\Models\registration;
use App\Models\about;
use App\Models\contact;

class gasController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function registration()
    {
        return view('registration');
    }
    public function registeraction(Request $req)
    {

        $firstname = $req->input('firstname');
        $lastname = $req->input('lastname');
        $dateofbirth = $req->input('dateofbirth');
        $address = $req->input('address');
        $email = $req->input('email');
        $contactnumber = $req->input('contactno');
    
        $city = $req->input('city');
        $district = $req->input('district');
        $state= $req->input('state');
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
        registration::insert($data);
        return redirect('/registration');
    }
    public function userlogin()
    {
        return view('userlogin');
    }
    
    public function loginaction(Request $req)
    {
        $username = $req->input('username');
        $password = $req->input('password');

        $data = registration::where('username', $username)->where('password', $password)->first();
        if (isset($data)) {
            $req->session()->put(array('sessid' => $data->id));
            return redirect('/indexs');
        } else {
            return redirect('/userlogin');
        }
    }
    public function about()
    {
        $id = session('sessid');
        $data['res'] = about::where('id', $id)->get();
        return view('/about', $data);
    }
    
    public function adminlogin()
    {
        return view('adminlogin');
    }
    public function contact()
    {
        return view('contact');
    }
    public function contactaction(Request $req)
    {

        $name = $req->input('name');
        $email = $req->input('email');
        $subject = $req->input('subject');
        $message = $req->input('message');
     
        $data = [
            'name' => $name,
            'email' => $email,
            'subject' => $subject,
            'message' => $message,
            
        ];
        contact::insert($data);
        return redirect('/contact');
    }
}

