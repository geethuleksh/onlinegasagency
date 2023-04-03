@extends('user.header_footer')
@section('index_body')
<div class="container-fluid py-5">
    <div class="container">
        <div class="mx-auto text-center mb-5" style="max-width: 500px;">
            <h6 class="text-primary text-uppercase">Booking</h6>
            <h1 class="display-5">Book Your Cylinder</h1>
        </div>
        <div class="row g-0">
            <div class="col-lg-12">
         
                <form action="/bookingaction" method="post" id="form">
                    @csrf
                    <div class="row g-3">
                    @foreach($bok as $value)
                        <div class="col-sm-6">
                            CYLINDER NAME :* <input type="text" name="name" id="name" class="form-control bg-light border-0 px-4" value="{{$value->name}}" style="height: 55px;">
                        </div>
                        <div class="col-sm-6">
                            CYLINDER ID:* <input type="text" name="cylinderid" id="cylinderid" class="form-control bg-light border-0 px-4" value="{{$value->productid}}" style="height: 55px;">
                        </div>
                        <div class="col-sm-12">
                            CYLINDER PRICE:* <input type="num" name="price" id="price" class="form-control bg-light border-0 px-4" value="{{$value->price}}" style="height: 55px;">
                        </div>
                        <div class="col-sm-12">
                            DESCRIPTION:* <input type="text" name="description" id="description" class="form-control bg-light border-0 px-4" value="{{$value->description}}" style="height: 55px;">
                        </div>
                        @endforeach
                        <div class="col-12">
                            PAYMENT OPTIONS:* <select name="payments" id="payments" class="form-control bg-light border-0 px-4" placeholder="payments" style="height: 55px;">
                                <option value="">--- change payment options ---</option>
                                <option value="cashondelivery">Cash On Delivery</option>
                                <option value="onlinepayment">Online payment</option>
                               

                            </select>
                        </div>
                        
                         <div class="col-sm-12">
                            <button class="btn btn-secondary w-100 py-3" id="cashondelivery" name="cashondelivery" type="submit">Booking</button>
                    </div>
                    
            </div>
            </form>
         
        </div>
    </div>

</div>

</div>

@endsection