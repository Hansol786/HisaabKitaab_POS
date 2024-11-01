@extends('dashboard.layout.master')

@section('content')
<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Brands</h4>
                    <div>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Brands</a></li>
                            <li class="breadcrumb-item active">Brands List</li>
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
                                <h4 class="header-title">Brands</h4>
                            </div>
                            <div class="col-md-6 text-align-right">
                                <button type="button" class="btn btn-success waves-effect waves-light"
                                data-bs-toggle="modal" data-bs-target="#add-brand-model">Add Brand</button>
                            </div>
                        </div>
                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Photo</th>
                                    <th>Brand Name</th>
                                    <th>Product Count</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Photo</td>
                                    <th>Lifeboy</th>
                                    <td>10</td>
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

         <!-- Add Brand Model -->
         <div id="add-brand-model" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Brand</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="field-1" class="form-label">Name <span class="red-text">*</span></label>
                                    <input type="text" class="form-control" id="field-1" placeholder="Enter Category">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="field-3" class="form-label">Category Image</label>
                                    <input type="File" class="form-control" id="field-3">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary waves-effect"data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-info waves-effect waves-light">Add Category</button>
                    </div>
                </div>
            </div>
            </div><!-- /.modal -->
            <!-- End Brand Model -->
    </div>
    <!-- container -->
</div> <!-- content -->
@endsection
