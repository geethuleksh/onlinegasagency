@extends('admin.header_nav')
@section('index_head')

<div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase">ADD PRODUCTS</h6>
                <h1 class="display-5">Please Enter The Product Details</h1>
            </div>
            <div class="row g-0">
            <div class="col-lg-4"></div>
                <div class="col-lg-6">
                   
                @foreach($reg as $value )
<form action="/updateaction/{{$value->id}}" method="post">
                    @csrf
                            <div class="row g-3">
                                <div class="col-12">
                                  PRODUCT ID :* <input type="num" name="productid" id="productid" class="form-control bg-light border-0 px-4" placeholder=" Enter Product Id" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                  PRODUCT NAME:*   <input type="text" name="name" id="name" class="form-control bg-light border-0 px-4" placeholder="Enter Product Name" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                 PRODUCT IMAGE:*    <input type="file" name="image"  id="image" class="form-control bg-light border-0 px-4" placeholder="Enter Description" style="height: 55px;">
                                </div>
                                
                                <div class="col-12">
                                 DESCRIPTION:*    <input type="num" name="description"  id="description" class="form-control bg-light border-0 px-4" placeholder="Enter Description" style="height: 55px;">
                                </div>
                                
                                <div class="col-12">
                                  PRODUCT PRICE :*  <input type="num" name="price"  id="price" class="form-control bg-light border-0 px-4" placeholder="Enter Product Price" style="height: 55px;">
                                </div>
                                
                                <div class="col-12">
                                    <button class="btn btn-secondary w-100 py-3"id="submit" name="submit"  type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                        @endforeach
                    </div>
                </div>
                
                      
@endsection
