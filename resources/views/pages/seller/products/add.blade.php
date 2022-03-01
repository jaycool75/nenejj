@extends('layouts.seller')
@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Add Product</h3>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Product</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Contents Here -->

    <form action="{{route('products.store')}}" name="form-add-products" method="POST" enctype="multipart/form-data" id="form-add-products">
    @csrf
    <section class="section">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Basic Information</h5>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <h6>Product Images</h6>
                            <p class="card-text">This is the main image of the product. Multiple images can be uploaded at once. Maximum 5 pictures. Size between 330x330 and 5000x5000. Obscene image is strictly prohibited.
                            </p>
                            <!-- Image Uploader -->
                            <input type="file" name="ProductImage" accept="image/*">
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <code>* </code><label for="basicInput">Product Name</label>
                                    <input type="text" class="form-control" id="basicInput" placeholder="Enter product name" name="ProductName">
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <code>* </code><label for="basicInput">Category</label>
                                        <select class="form-select" id="basicSelect" name="Category">
                                            <option value="0" disabled selected>-- Select Categories --</option>
                                            @foreach ($categories as $category)
                                                <option value="{{$category->id}}">{{$category->category}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <code>* </code><label for="basicInput">Variation</label>
                                        <input type="text" class="form-control" id="basicInput" placeholder="(Ex: 500g, 1L, 250ml, 1kg)" name="Variation">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <code>* </code><label for="basicInput">Price</label>
                                        <input type="text" class="form-control" id="basicInput" placeholder="Enter category" name="Price">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <code>* </code><label for="basicInput">Quantity</label>
                                        <input type="text" class="form-control" id="basicInput" placeholder="Amount of available products" name="Quantity">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <section class="section">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5 class="card-title"><code>* </code> Description</h5>
                                                    </div>
                                                    <div class="card-body">
                                                        <textarea name="Description" id="editor" cols="30" rows="10" placeholder="Enter Description Here">
                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <center><button class="btn btn-primary" type="submit">Save Product</button></center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </section>
</div>
</form>

@endsection

@section('scripts')
    
<script>
    // Simple Datatable
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>

<!-- toastify -->
<script src="{{asset('assets/seller/vendors/toastify/toastify.js')}}"></script>

<!-- filepond -->
<script src="{{asset('assets/seller/vendors/ckeditor/ckeditor.js')}}"></script>


<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>


@endsection

@section('styles')
<link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">
@endsection