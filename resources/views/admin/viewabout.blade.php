@extends('admin.header_nav')
@section('index_head')
<!-- Main content -->
<section class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-lg-4"></div>
                <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
               
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Title</th>
                    <th>Description</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($res as $value)
<tr>
    <td>{{$value->title}}</td>
    <td>{{$value->description}}</td>
</tr>
@endforeach
                  </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
