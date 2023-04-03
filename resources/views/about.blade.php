@extends('header_footer')
@section('index-body')
<div class="container-fluid about pt-5">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="d-flex h-100 border border-5 border-primary border-bottom-0 pt-4">
                    <img class="img-fluid mt-auto mx-auto" src="img/gasgas.png">
                </div>
            </div>
            <div class="col-lg-6 pb-5">
                <div class="mb-3 pb-2">
                    <h6 class="text-primary text-uppercase">About Us</h6>

                    @foreach($res as $value)
                    <p class="mb-4"> {{$value->description}}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
@endsection