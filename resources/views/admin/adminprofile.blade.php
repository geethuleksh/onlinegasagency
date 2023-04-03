@extends('admin.header_nav')
      @section('index_head')
    
      <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
            <h5 class="text-primary text-uppercase">PROFILE</h5>
            
            </div>
            <div class="row g-0">
                <div class="col-lg-3"></div>
                <div class="col-lg-9">
                    
                <form action="aboutaction" method="post">
                   @csrf
                            <div class="row g-3">
                                <div class="col-12">
                                  USER NAME :* <input type="text" id="name" name="name" class="form-control bg-light border-0 px-4" placeholder="Enter Your Username" style="height: 55px;">
                                </div>
                                
                                <div class="col-12">
                                PASSWORD :*  <input type="text" id="password" name="password" class="form-control bg-light border-0 px-4" placeholder=" Enter Your Password" style="height: 55px;">
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
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
            @endsection