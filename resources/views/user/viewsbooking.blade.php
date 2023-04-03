@extends('user.header_footer')
@section('index_body')
@if (Session::has('paymentalert'))
<div class="alert alert-success alert-dismissible fade show" role="alert">

    <strong>Alert !</strong> {{ session('paymentalert') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if (Session::has('jsAlert'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">

    <strong>Alert !</strong> {{ session('jsAlert') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="container-fluid py-5">
    <div class="container">
        <div class="mx-auto text-center mb-5" style="max-width: 500px;">

            <h1 class="text-primary text-uppercase">MY BOOKING </h1>
        </div>
        <center>
            <div class="row g-0">
                @foreach($viewbok as $value)

                <div class="col-lg-4">

                    <div class="col-sm-4  mx-3">
                        <div class="card " style="width:400px">
                            <div class="card-body ">


                                <table>
                                    <tr class="card-title">
                                        <th>CYLINDER NAME:</th>
                                        <td>
                                            <p>{{$value->name}}</p>
                                        </td>
                                    </tr>
                                    <tr class="card-title">
                                        <th>CYLINDER ID:</th>
                                        <td>
                                            <p>{{$value->cylinderid}}</p>
                                        </td>
                                    </tr>
                                    <tr class="card-title">
                                        <th>CYLINDER PRICE:</th>
                                        <td>
                                            <p>{{$value->price}}</p>
                                        </td>
                                    </tr>
                                    <tr class="card-title">
                                        <th>DESCRIPTION:</th>
                                        <td>
                                            <p>{{$value->description}}</p>
                                        </td>
                                    </tr>
                                    <tr class="card-title">
                                        <th>PAYMENT OPTIONS :</th>
                                        <td>
                                            <p>{{$value->payments}}</p>
                                        </td>
                                    </tr>
                                    <tr class="card-title">
                                        <th>STATUS :</th>
                                        <td>
                                            <p>{{$value->status}}</p>
                                        </td>
                                    </tr>
                                </table>
                                @if($value->status == "approved" && $value->payments=="onlinepayment")
                                <a href="/proceedtopayment/{{$value->id}}" class="btn btn-secondary w-100 py-3">

                                    PROCEED TO PAYEMENT
                                </a>
                                @endif
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

        </center>

    </div>
</div>
@endsection