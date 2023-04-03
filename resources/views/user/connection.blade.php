 @extends('user.header_footer')
 @section('index_body')
 <div class="container-fluid py-5">
     <div class="container">
         <div class="mx-auto text-center mb-5" style="max-width: 500px;">
             <h5 class="text-primary text-uppercase">NEW CONNECTION</h5>
             <h1 class="display-5">Please Submit The Form </h1>
         </div>
         <div class="row g-0">
             <div class="col-lg-12">
                 <form action="/connectionaction" enctype="multipart/form-data" method="post" id="form">
                     @csrf
                     <div class="row g-3">
                         @foreach($con as $value)
                         <div class="col-6">
                             FIRST NAME :* <input type="text" name="firstname" id="firstname" class="form-control bg-light border-0 px-4" value="{{$value->firstname}}" style="height: 55px;">
                         </div>
                         <div class="col-6">
                             LAST NAME:* <input type="text" name="lastname" id="lastname" class="form-control bg-light border-0 px-4" value="{{$value->lastname}}" style="height: 55px;">
                         </div>

                         <div class="col-12">
                             EMAIL :* <input type="email" name="email" id="email" class="form-control bg-light border-0 px-4" value="{{$value->email}}" style="height: 55px;">
                         </div>
                         <div class="col-6">
                             CONTACT NUMBER :* <input type="num" name="contactno" id="contactno" class="form-control bg-light border-0 px-4" value="{{$value->contactno}}" style="height: 55px;">
                         </div>
                         @endforeach
                         <div class="col-6">
                             PHONE NUMBER :* <input type="num" name="phoneno" id="phoneno" class="form-control bg-light border-0 px-4" placeholder="Your Number" style="height: 55px;">
                         </div>


                         <div class="col-12">
                             ID TYPE:* <select name="idtype" id="idtypr" class="form-control bg-light border-0 px-4" placeholder="Your Answer" style="height: 55px;">
                                 <option value="">--- Choose a proof ---</option>
                                 <option value="aadhar">Aadhar Card</option>
                                 <option value="driving">Driving License</option>
                                 <option value="id">Voter Id Card</option>
                                 <option value="Pan">pan Card</option>
                             </select>
                         </div>
                         <div class="col-12">
                             ID NUMBER:* <input type="text" name="idnumber" id="idnumber" class="form-control bg-light border-0 px-4" placeholder="Your Id Number" style="height: 55px;">
                         </div>
                         <div class="col-12">
                             ID PROOF:* <input type="file" name="idproof" id="idproof" class="form-control bg-light border-0 px-4" placeholder="Your Id Number" style="height: 55px;">



                             <div class="col-12">
                                 <button class="btn btn-secondary w-100 py-3" id="submit" name="submit" type="submit">Submit</button>
                             </div>
                         </div>
                 </form>
             </div>
         </div>

     </div>

 </div>

 @endsection