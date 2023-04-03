<html>

<head>
    <link href="/css/payment.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-4 mb-5">
                <div class="card p-3 bg-success text-center">
                    <p class="mb-0 fw-bold h4">Payment Online</p>
                </div>
            </div>
        </div>
        @foreach($viewbook as $value)
        <div class="row">
            <div class="col-lg-3 mb-lg-0 mb-3">
                <p class="h4 mb-0">Summary</p>
                <p class="mb-0"><span class="fw-bold">Product:</span><span class="c-green">: {{$value->name}}</span></p>
                <p class="mb-0"><span class="fw-bold">Cylinder Id:</span><span class="c-green">{{$value->cylinderid}}</span></p>
                <p class="mb-0"><span class="fw-bold">Price:</span><span class="c-green">: {{$value->price}}</span></p>
                <p class="mb-0"><span class="fw-bold">Status:</span><span class="c-green">{{$value->status}}</span></p>
            </div>
            <div class="col-lg-9">
                <form action="/proceedtopaymentaction/{{$value->id}}" method="post" class="form">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form__div">
                                <input type="text" name="card_number" class="form-control" placeholder=" ">
                                <label for="" class="form__label">Card Number</label>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form__div">
                                <input type="text" name="expiry" class="form-control" placeholder=" ">
                                <label for="" class="form__label">MM / yy</label>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form__div">
                                <input type="password" name="cvv" class="form-control" placeholder=" ">
                                <label for="" class="form__label">cvv code</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form__div">
                                <input type="text" name="cardholder" class="form-control" placeholder=" ">
                                <label for="" class="form__label">name on the card</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <input type="submit" class="btn btn-primary w-100" value="Pay">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</body>

</html>