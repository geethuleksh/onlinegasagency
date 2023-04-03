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
                    <th>PRODUCT ID</th>
                    <th>PRODUCT NAME</th>
                    <th>PRODUCT IMAGE</th>
                    <th>DESCRIPTION</th>
                    <th>PRODUCT PRICE</th>
                  
                   
                  </tr>
                </thead>
                <tbody>
                @foreach($res as $value)
        <tr>
      <td>{{$value->productid}}</td>
      <td>{{$value->name}}</td>
      <td>{{$value->image}}</td>
      <td>{{$value->description}}</td>
      <td>{{$value->price}}</td>
     
      <td><a href="/edit/{{$value->id}}">Edit</a></td>
      <td><a href="/delete/{{$value->id}}">Delete</a></td>
      
     
        </tr>
        @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->


            @endsection