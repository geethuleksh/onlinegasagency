@extends('admin.header_nav')
@section('index_head')
<div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
            <h5 class="text-primary text-uppercase">ABOUT</h5>
                <h1 class="display-5">ADD ABOUT</h1>
            </div>
            <div class="row g-0">
                <div class="col-lg-3"></div>
                <div class="col-lg-9">
                    
                <form action="aboutaction" method="post">
                   @csrf
                            <div class="row g-3">
                                <div class="col-12">
                                  TITLE :* <input type="text" id="title" name="title" class="form-control bg-light border-0 px-4"  style="height: 55px;">
                                </div>
                                
                                <div class="col-12">
                                DESCRIPTION :*  <textarea type="text" id="description" name="description" class="form-control bg-light border-0 px-4" style="height: 55px;"></textarea>
                                </div>
                                  
                                
                                <div class="col-12">
                                    <button class="btn btn-secondary w-100 py-3" type="submit">Add</button>
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