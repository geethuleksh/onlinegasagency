
@extends('header_footer')
@section('index-body')
<div class="container-fluid py-5">
  <div class="container">
    <div class="mx-auto text-center mb-5" style="max-width: 500px;">
      <h5 class="text-primary text-uppercase">LOGIN</h5>
      <h1 class="display-5">Please Login</h1>
    </div>
    <div class="row g-0">
      <div class="col-lg-12">

        <form>
          <div class="row g-3">
            <div class="col-12">
              USER NAME : <input type="text" name="username" class="form-control bg-light border-0 px-4" placeholder="Enter Your Username" style="height: 55px;">
            </div>

            <div class="col-12">
              PASSWORD: <input type="password"  name="password" class="form-control bg-light border-0 px-4" placeholder=" Enter Your Password" style="height: 55px;">
            </div>


            <div class="col-12">
              <button class="btn btn-secondary w-100 py-3" type="submit">Login</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection