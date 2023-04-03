<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">
        <center>
            <div class="row">
                <div class="col-sm-8">
                    <div class="card" style="width:400px">
                        <div class="card-body">
                        <h1 ><b style="color:orange">BHARAT</b><b style="color:green">GAS AGENCY</b></h1>
                            <h4 class="card-title">Hello {{$fname}} {{$lname}} </h4>
                            <p class="card-text">Your Payment is Recieved</p>
                            <p class="card-text">Booking id: {{$id}}</p>
                            <p class="card-text">Payment type:{{$type}}</p>
                            <p class="card-text">Payment status :{{$status}}</p>
                            <p class="card-text">Your order within three days</p>
                        </div>
                    </div>
                </div>
            </div>
        </center>


</body>

</html>