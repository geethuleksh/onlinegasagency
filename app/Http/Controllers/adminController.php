<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\about;
use App\Models\connection;
use App\Models\status;
use App\Models\booking;
use App\Models\products;
use App\Models\registration;
use App\Models\contact;
use Mail;
class adminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function approveconnections()
    {
      
        $data['res'] = connection::where('status','approve')->get();
        return view('admin.approveconnections', $data);

    }
    public function newconnections()
    {
       

        $data['res'] = connection::where('status','booked')->get();
        return view('admin.newconnections', $data);
    
    }
    public function approve($id)
    {
        $data = ['status' => "approve"];
        connection::where('id', $id)->update($data);
        return redirect('/newconnections');
    }
    public function reject($id)
    {
        $data = ['status' => "reject"];
        connection::where('id', $id)->update($data);
        return redirect('/newconnections');
    }
    public function rejectedconnections()
    {
    
        $data['res'] = connection::where('status', 'reject')->get();
        return view('admin.rejectedconnections', $data);

    }
    public function changestatus($id)
    {
        $data['res']=connection::where('id', $id)->get();
        return view('admin.changestatus',$data);
    }
    public function changeaction(Request $req,$id)
    {
        $changestatus = $req->input('changestatus');
        
        $data = [
            'status' => $changestatus,
        ];
        connection::where('id', $id)->update($data);
        return redirect('/approveconnections');
    
    }
    
    public function viewproduct()
    {
        $data['res'] = products::get();
        return view('admin.viewproduct', $data);
       
    }
    public function edit($id)
    {
        $data['reg'] = products::where('id', $id)->get();
        return view('admin.edit', $data);
    }
    public function updateaction(Request $req,$id)
    {
        $productid = $req->input('productid');
        $productname = $req->input('name');
        $image = $req->input('image');
        $description = $req->input('description');
        $productprice = $req->input('price');
       

        $data = [
            'productid' => $productid,
            'name' => $productname,
            'image' => $image,
            'description' => $description,
            'price' => $productprice,
            

        ];
        products::where('id', $id)->update($data);
        return redirect('/viewproduct');
    }
    public function delete($id)
    {
        products::where('id', $id)->delete();
        return redirect('/viewproduct');
    }
   
    public function approvebooking()
    {
     
        $data['res'] = booking::where('status','approved')->get();
        
        return view('admin.approvebooking', $data);
    }
    public function viewbooking()
    {
        

        $data['res'] = booking::where('status','booked')->get();
        return view('admin.viewbooking', $data);
    
    }
    public function approved($id)
    {
        $data = ['status' => "approved"];
        booking::where('id', $id)->update($data);
        $userid=booking::where('id', $id)->value('userid');
        $fname = registration::where('id', $userid)->value('firstname');
        $lname = registration::where('id', $userid)->value('lastname');
        $email = registration::where('id', $userid)->value('email');
        $cylindername = booking::where('id', $userid)->value('name');
        $type = booking::where('id', $userid)->value('payments');
        // $mail = [
        //     'productname'=>$cylindername,
        //     'fname' => $fname,
        //     'lname' => $lname,
        //     'id' => $id,
        //     'type' => "$type",
        //     'status' => "BOOKING APPROVED"
        // ];

        // $user['to'] = $email;
        // Mail::send('user.bookingemail', $mail, function ($message) use ($user) {
        //     $message->to($user['to']);
        //     $message->subject('BOOKING RECIVED MAIL FROM BHARATH GAS');
        // });
        return redirect('/viewbooking');
    }
    public function rejected($id)
    {
        $data = ['status' => "rejected"];
        booking::where('id', $id)->update($data);
        return redirect('/viewbooking');
    }
    public function rejectedbooking()
    {
        
        $data['res'] = booking::where('status', 'rejected')->get();
        return view('admin.rejectedbooking', $data);
    }
    
    public function addproduct()
    {
        return view('admin.addproduct');
    }
    public function productaction(Request $req)
    {

        $productid = $req->input('productid');
        $productname = $req->input('name');
        $image=$req->file('image');
        $filename=$image->getClientOriginalName();
        $image->move(public_path().'/image/',$filename);
        $id = session('sessid');
      
        $description = $req->input('description');
        $productprice = $req->input('price');
       
        $data = [
            'productid' => $productid,
            'name' => $productname,
           
            'image'=>$filename,
            'description' => $description,
            'price' => $productprice,
            'userid' => $id
        ];
        products::insert($data);
        return redirect('/viewproduct');
    }
    
    public function viewpayment()
    {
        return view('admin.viewpayment');
    }
    public function addabout()
    {
        return view('admin.addabout');
    }
    
    public function aboutaction(Request $req)
    {

        $title = $req->input('title');
        $description = $req->input('description');
        
        $data = [
            'title' => $title,
            'description' => $description
           
        ];
        about::insert($data);
        return redirect('/viewabout');
    }
    public function viewabout()
    {
      
        $data['res'] = about::get();
        return view('admin.viewabout', $data);
    }
    public function allconnections()
    {
     
    
        $data['res'] = connection::get();
        return view('admin.allconnections', $data);
    
    }
    public function userdetails()
    {
        $data['res'] = registration::get();
        return view('admin.userdetails', $data);
    }
    public function complaints()
    {
        $data['res'] = contact::get();
        return view('admin.complaints', $data);
    }
    public function changestatuss($id)
    {
       
        $data['rec']=booking::where('id', $id)->get();
        return view('admin.changestatuss',$data);
    }
    public function changesaction(Request $req,$id)
    {
        $changestatus = $req->input('changestatus');
        
        $data = [
            'status' => $changestatus,
        ];
      
        booking::where('id', $id)->update($data);
        return redirect('/approvebooking');
    
    }
    public function adminprofile()
    {
        return view('admin.adminprofile');
    }
    
}
