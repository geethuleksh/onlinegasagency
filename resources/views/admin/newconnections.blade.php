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
                    <th>EMAIL</th>
                    <th>PHONENO</th>
                    <th>CONTACT NUMBER</th>
                    <th>ID TYPE</th>
                    <th>ID NUMBER</th>
                    <th>ID PROOF</th>
                    <th>USERID</th>
                    <th>STATUS</th>
                   
                  </tr>
                </thead>
                <tbody>
                @foreach($res as $value)
        <tr>
      <td>{{$value->firstname}}</td>
      <td>{{$value->lastname}}</td>
      <td>{{$value->email}}</td>
      <td>{{$value->phoneno}}</td>
      <td>{{$value->contactno}}</td>
      <td>{{$value->idtype}}</td>
      <td>{{$value->idnumber}}</td>
      <td>{{$value->idproof}}</td>
      <td>{{$value->userid}}</td>
      <td>{{$value->status}}</td>
      <td><a href="/approve/{{$value->id}}">approve</a></td>
      <td><a href="/reject/{{$value->id}}">reject</a></td>
        </tr>
        @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          @endsection