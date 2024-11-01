@extends('dashboard.layout.master')

@section('content')
<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Add Adjustment</h4>
                    <div>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Adjustments</a></li>
                            <li class="breadcrumb-item active">Add Adjustment</li>
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
                        <h4 class="header-title">Adjustment</h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Warehouse</label> <br/>
                                    <select class="selectize-select">
                                        <option data-display="Select">Choose Warehouse</option>
                                        <option value="1">Warehouse1</option>
                                        <option value="2">Warehouse2</option>
                                        <option value="4">Warehouse3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Date</label> <br/>
                                    <input type="text" id="humanfd-datepicker" class="form-control" placeholder="October 9, 2018">
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
                                            <th>Product Code</th>
                                            <th>Stock</th>
                                            <th>Type</th>
                                            <th>Qty</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>T-Shirt</td>
                                            <td>1122</td>
                                            <td>type</td>
                                            <td>
                                                <select class="selectize-select">
                                                    <option data-display="Select">Addition</option>
                                                    <option value="1">Subtraction</option>
                                                </select>
                                            </td>
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
                            <div class="col-lg-12">
                                <div class="button-list text-align-right">
                                    <button type="button" class="btn btn-primary">Add Adjustment</button>
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
