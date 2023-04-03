
@extends('user.header_footer')
@section('index_body')
@if (Session::has('jsAlert'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">

<strong>Alert !</strong> {{ session('jsAlert') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="container-fluid py-5">
     <div class="container">
         <div class="mx-auto text-center mb-5" style="max-width: 500px;">
            
             <h1 class="text-primary text-uppercase">NEW CONNECTION </h1>
         </div>
         <center>
         <div class="row g-0">
             <div class="col-lg-12">
             @foreach($viewcon as $value)
       
       <div class="col-sm-4  mx-3">
           <div class="card " style="width:400px">
               <div class="card-body ">


                   <table>
                       <tr class="card-title">
                           <th>FIRST NAME:</th>
                           <td>
                               <p>{{$value->firstname}}</p>
                           </td>
                       </tr>
                       <tr class="card-title">
                           <th>LAST NAME:</th>
                           <td>
                               <p>{{$value->lastname}}</p>
                           </td>
                           </tr>
                           <tr class="card-title">
                           <th>EMAIL:</th>
                           <td>
                               <p>{{$value->email}}</p>
                           </td>
                           </tr>
                           <tr class="card-title">
                           <th>CONTACT NUMBER:</th>
                           <td>
                               <p>{{$value->contactno}}</p>
                           </td>
                           </tr>
                           <tr class="card-title">
                           <th>PHONE NUMBER :</th>
                           <td>
                               <p>{{$value->phoneno}}</p>
                           </td>
                           </tr>
                           <tr class="card-title">
                           <th>ID TYPE:</th>
                           <td>
                               <p>{{$value->idtype}}</p>
                           </td>
                           </tr>
                           <tr class="card-title">
                           <th>ID NUMBER :</th>
                           <td>
                               <p>{{$value->idnumber}}</p>
                           </td>
                           </tr>
                           <tr class="card-title">
                           <th>ID PROOF:</th>
                           <td>
                               <p>{{$value->idproof}}</p>
                           </td>
                           </tr>
                            
                           <tr class="card-title">
                           <th>STATUS:</th>
                           <td>
                               <p>{{$value->status}}</p>
                           </td>
                           </tr>
                           
                           <tr class="card-title">
                           <th>USER ID:</th>
                           <td>
                               <p>{{$value->userid}}</p>
                           </td>
                           </tr>
                           
                   </table>
                   
                  
               </div>
           </div>
       </div>
       </center>
       @endforeach
   </div>
</div>

 
@endsection
