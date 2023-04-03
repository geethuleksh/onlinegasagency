@extends('admin.header_nav')
@section('index_head')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
       
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
            
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>FIRST NAME</th>
                    <th>LAST NAME</th>
                    <th>DATE OF BIRTH</th>
                    <th>ADDRESS</th>
                    <th>EMAIL</th>
                    <th>CONTACT NUMBER</th>
                    <th>CITY</th>
                    <th>DISTRICT NAME</th>
                    <th>STATE NAME</th>
                    <th>AREA PIN CODE</th>
                    <th>USERNAME</th>
                    <th>PASSWORD</th>
                  </tr>
                </thead>
                <tbody>
          @foreach($res as $value)
        <tr>
      <td>{{$value->firstname}}</td>
      <td>{{$value->lastname}}</td>
      <td>{{$value->dateofbirth}}</td>
      <td>{{$value->address}}</td>
      <td>{{$value->email}}</td>
      <td>{{$value->contactno}}</td>
      <td>{{$value->city}}</td>
      <td>{{$value->district}}</td>
      <td>{{$value->state}}</td>
      <td>{{$value->pin}}</td>
      <td>{{$value->username}}</td>
      <td>{{$value->password}}</td>
        </tr>
        @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
@endsection
