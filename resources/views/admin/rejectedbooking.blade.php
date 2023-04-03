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
                  <th>CYLINDER NAME</th>
                    <th>CYLINDER ID</th>
                    <th>DESCRIPTION</th>
                    <th>PAYMENT OPTIONS</th>
                    <th>CYLINDER PRICE</th>
                    <th>USERID</th>
                    <th>STATUS</th>
                   
                  </tr>
                </thead>
                <tbody>
                @foreach($res as $value)
        <tr>
     
      <td>{{$value->name}}</td>
      <td>{{$value->cylinderid}}</td>
      <td>{{$value->description}}</td>
      <td>{{$value->payments}}</td>
      <td>{{$value->price}}</td>
      <td>{{$value->userid}}</td>
      <td>{{$value->status}}</td>
      <td><a href="/changestatuss/{{$value->id}}">change status</a></td>
        </tr>
        @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->


            @endsection