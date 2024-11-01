@extends('dashboard.layout.master')

@section('content')
<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Products</h4>
                    <div>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Products</a></li>
                            <li class="breadcrumb-item active">Products List</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-1">
                            <div class="col-md-6">
                                <h4 class="header-title">Products</h4>
                            </div>
                            <div class="col-md-6 text-align-right">
                                <a href="{{ route('product_create') }}" class="btn btn-success">Add Product</a>
                            </div>
                        </div>
                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Name</th>
                                    <th>Code</th>
                                    <th>Brand</th>
                                    <th>Price</th>
                                    <th>Product Unit</th>
                                    <th>In Stock</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Image</td>
                                    <td>T-Shirt</td>
                                    <td>123456</td>
                                    <td>Nike</td>
                                    <td>Rs.2500</td>
                                    <td>Piece</td>
                                    <td>50</td>
                                    <td>2011/04/25</td>
                                    <td>
                                        <a><i class="far fa-eye text-success font-size-16"></i></a> |
                                        <a><i class="far fa-edit text-primary font-size-16"></i></a> |
                                        <a><i class="fas fa-trash-alt text-danger font-size-16"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->
    </div>
    <!-- container -->
</div> <!-- content -->
@endsection
