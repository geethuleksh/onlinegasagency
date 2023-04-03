@extends('user.header_footer')
@section('index_body')
<div class="container-fluid py-5">
    <div class="container">
        <div class="mx-auto text-center mb-5" style="max-width: 500px;">
            <h6 class="text-primary text-uppercase">Registration</h6>
            <h1 class="display-5">Please Register The Form</h1>
        </div>
        @foreach($profile as $value)
        <div class="row g-0">
            <div class="col-lg-12">
                <form action="/updatesaction/{{$value->id}}" method="post" id="profile" name="profile">
                    @csrf
                    <div class="row g-3">
                        <div class="col-sm-6">
                            FIRST NAME :* <input type="text" name="firstname" id="firstname" class="form-control bg-light border-0 px-4" value="{{$value->firstname}}" style="height: 55px;">
                        </div>
                        <div class="col-sm-6">
                            SECOND NAME:* <input type="text" name="lastname" id="lastname" class="form-control bg-light border-0 px-4" value="{{$value->lastname}}" style="height: 55px;">
                        </div>
                        <div class="col-sm-12">
                            DATE OF BIRTH:* <input type="num" name="dateofbirth" id="dateofbirth" class="form-control bg-light border-0 px-4" value="{{$value->dateofbirth}}" style="height: 55px;">
                        </div>
                        <div class="col-sm-12">
                            ADDRESS:* <textarea name="address" id="address" class="form-control bg-light border-0 px-4 py-3" rows="2" value="{{$value->address}}">{{$value->address}}</textarea>
                        </div>
                        <div class="col-12">
                            EMAIL :* <input type="email" name="email" id="email" class="form-control bg-light border-0 px-4" value="{{$value->email}}" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            CONTACT NUMBER :* <input type="num" name="contactno" id="contactno" class="form-control bg-light border-0 px-4" value="{{$value->contactno}}" style="height: 55px;">
                        </div>

                        <div class="col-12">
                            CITY:* <input type="text" name="city" id="city" class="form-control bg-light border-0 px-4" value="{{$value->city}}" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            DISTRICT NAME:* <input type="text" name="district" id="district" class="form-control bg-light border-0 px-4" value="{{$value->district}}" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            STATE NAME :* <input type="text" name="state" id="state" class="form-control bg-light border-0 px-4" value="{{$value->state}}" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            AREA PIN CODE:* <input type="text" name="pin" id="pin" class="form-control bg-light border-0 px-4" value="{{$value->pin}}" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            USERNAME:* <input type="text" name="username" id="username" class="form-control bg-light border-0 px-4" value="{{$value->username}}" style="height: 55px;">
                        </div>
                        <div class="col-6">
                            PASSWORD:* <input type="password" name="password" id="password" class="form-control bg-light border-0 px-4" value="{{$value->password}}" style="height: 55px;">
                        </div>
                        <div class="col-12">
                            <button class="btn btn-secondary w-100 py-3" id="submit" name="submit" type="submit">Submit</button>
                        </div>
                    </div>

                </form>


            </div>
        </div>
        @endforeach
    </div>

</div>

@endsection