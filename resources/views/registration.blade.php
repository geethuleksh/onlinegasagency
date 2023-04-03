 @extends('header_footer')
 @section('index-body')
 <div class="container-fluid py-5">
     <div class="container">
         <div class="mx-auto text-center mb-5" style="max-width: 500px;">
             <h6 class="text-primary text-uppercase">Registration</h6>
             <h1 class="display-5">Please Register The Form</h1>
         </div>
         <div class="row g-0">
             <div class="col-lg-12">

                 <form action="/registeraction" method="post" id="form">
                     @csrf
                     <div class="row g-3">
                         <div class="col-6">
                             FIRST NAME :* <input type="text" name="firstname" id="firstname" class="form-control bg-light border-0 px-4" placeholder="Your First Name" style="height: 55px;">
                         </div>
                         <div class="col-6">
                             SECOND NAME:* <input type="text" name="lastname" id="lastname" class="form-control bg-light border-0 px-4" placeholder="Your Second Name" style="height: 55px;">
                         </div>
                         <div class="col-12">
                             DATE OF BIRTH:* <input type="num" name="dateofbirth" id="dateofbirth" class="form-control bg-light border-0 px-4" placeholder="Your DOB" style="height: 55px;">
                         </div>
                         <div class="col-12">
                             ADDRESS:* <textarea name="address" id="address" class="form-control bg-light border-0 px-4 py-3" rows="2" placeholder="Your Address"></textarea>
                         </div>
                         <div class="col-12">
                             EMAIL :* <input type="email" name="email" id="email" class="form-control bg-light border-0 px-4" placeholder="Your Email" style="height: 55px;">
                         </div>
                         <div class="col-12">
                             CONTACT NUMBER :* <input type="num" name="contactno" id="contactno" class="form-control bg-light border-0 px-4" placeholder="Your Number" style="height: 55px;">
                         </div>

                         <div class="col-12">
                             CITY:* <input type="text" name="city" id="city" class="form-control bg-light border-0 px-4" placeholder="Your Answer" style="height: 55px;">
                         </div>
                         <div class="col-12">
                             DISTRICT NAME:* <input type="text" name="district" id="district" class="form-control bg-light border-0 px-4" placeholder="Your Answer" style="height: 55px;">
                         </div>
                         <div class="col-12">
                             STATE NAME :* <input type="text" name="state" id="state" class="form-control bg-light border-0 px-4" placeholder="Your Answer" style="height: 55px;">
                         </div>
                         <div class="col-12">
                             AREA PIN CODE:* <input type="text" name="pin" id="pin" class="form-control bg-light border-0 px-4" placeholder="Your Answer" style="height: 55px;">
                         </div>
                         <div class="col-12">
                             USERNAME:* <input type="text" name="username" id="username" class="form-control bg-light border-0 px-4" placeholder="Your User Name" style="height: 55px;">
                         </div>
                         <div class="col-6">
                             PASSWORD:* <input type="password" name="password" id="password" class="form-control bg-light border-0 px-4" placeholder="Your  Password" style="height: 55px;">
                         </div>
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