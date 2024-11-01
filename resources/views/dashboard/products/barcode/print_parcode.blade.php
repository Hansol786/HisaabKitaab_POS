@extends('dashboard.layout.master')

@section('content')
<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Print Barcode</h4>
                    <div>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Barcode</a></li>
                            <li class="breadcrumb-item active">Print Barcode</li>
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
                        <h4 class="header-title">Print Barcode</h4>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label class="form-label">Warehouse</label> <br/>
                                    <select class="selectize-select">
                                        <option data-display="Select">Choose Product Category</option>
                                        <option value="1">Some option</option>
                                        <option value="2">Another option</option>
                                        <option value="3" disabled>A disabled option</option>
                                        <option value="4">Potato</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-2">
                                    <label class="form-label">Search Product</label> <br/>
                                    <input type="search" class="form-control" name="search" placeholder="Search Product"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Qty</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Image</td>
                                            <td>
                                                <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected">
                                                    <span class="input-group-btn input-group-prepend"></span>
                                                    <input data-toggle="touchspin" value="77" type="text" data-bts-button-down-class="btn btn-danger" data-bts-button-up-class="btn btn-info" class="form-control">
                                                    <span class="input-group-btn input-group-append"></span>
                                                </div>
                                            </td>
                                            <td>
                                                <a><i class="fas fa-trash-alt text-danger font-size-16"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Paper Size:</label> <br/>
                                    <select class="selectize-select">
                                        <option data-display="Select">Choose Paper Size</option>
                                        <option value="1">Some option</option>
                                        <option value="2">Another option</option>
                                        <option value="3" disabled>A disabled option</option>
                                        <option value="4">Potato</option>
                                    </select>
                                </div>
                                <div class="button-list text-center">
                                    <button type="button" class="btn btn-outline-primary waves-effect waves-light width-30">Preview <i class="fa fa-money-bill"></i></button>
                                    <button type="button" class="btn btn-outline-success waves-effect waves-light width-30">Reset <i class="fa fa-credit-card"></i></button>
                                    <button type="button" class="btn btn-outline-danger waves-effect waves-light width-30">Print <i class="fa fa-wallet"></i></button>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="switchery-container">
                                    <div class="switchery-item">
                                        <label class="form-label">Show Company Name</label>
                                        <div class="switchery-demo">
                                            <input type="checkbox" checked data-plugin="switchery" data-color="#64b0f2" data-size="small">
                                        </div>
                                    </div>

                                    <div class="switchery-item">
                                        <label class="form-label">Show Product Name</label>
                                        <div class="switchery-demo">
                                            <input type="checkbox" checked data-plugin="switchery" data-color="#64b0f2" data-size="small">
                                        </div>
                                    </div>

                                    <div class="switchery-item">
                                        <label class="form-label">Show Price</label>
                                        <div class="switchery-demo">
                                            <input type="checkbox" checked data-plugin="switchery" data-color="#64b0f2" data-size="small">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- container -->

</div> <!-- content -->
@endsection
