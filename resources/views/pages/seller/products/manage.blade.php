@extends('layouts.seller')
@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Manage Products</h3>
                <p class="text-subtitle text-muted">List of all products</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/store">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Manage Products</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Basic Tables start -->
    <section class="section">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card-body">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Discounted Price</th>
                            <th>Stocks</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($products as $product)
                            <tr>
                                <td>                   
                                    <img class="img-50px" src="{{asset('storage/uploads/images/'.$product->image_folder.'/'.$product->variation.'.jpg')}}" alt="{{$product->id}}" style="padding: 10px" alt="{{$product->id}}">
                                </td>
                                <td>{{$product->product_name}} {{$product->variation}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->discounted_price}}</td>
                                <td>{{$product->availability}}</td>
                                <td>
                                    @if ($product->availability >= 10)
                                    <span class="badge bg-success">Active</span>
                                    @elseif ($product->availability > 0)
                                    <span class="badge bg-warning">Low Stock</span>
                                    @else
                                    <span class="badge bg-danger">Out of Stock</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>
@endsection

@section('styles')
<link rel="stylesheet" href="{{asset('assets/seller/vendors/jquery-datatables/jquery.dataTables.bootstrap5.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/seller/vendors/fontawesome/all.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/seller/css/style.css')}}">
<style>
    table.dataTable td{
        padding: 15px 8px;
    }
    .fontawesome-icons .the-icon svg {
        font-size: 24px;
    }
</style>
@endsection

@section('scripts')
<script src="{{asset('assets/seller/vendors/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/seller/vendors/jquery-datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/seller/vendors/jquery-datatables/custom.jquery.dataTables.bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/seller/vendors/fontawesome/all.min.js')}}"></script>
<script>
let jquery_datatable = $("#table1").DataTable()
</script>
<script src="{{asset('assets/js/mazer.js')}}"></script>
@endsection