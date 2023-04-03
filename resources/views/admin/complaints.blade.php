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
                    <th> NAME</th>
                    <th>EMAIL</th>
                    <th>SUBJECT</th>
                    <th>MESSAGE</th>
                    
                  </tr>
                </thead>
                <tbody>
          @foreach($res as $value)
        <tr>
      <td>{{$value->name}}</td>
      <td>{{$value->email}}</td>
      <td>{{$value->subject}}</td>
      <td>{{$value->message}}</td>
      
        </tr>
        @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
@endsection
