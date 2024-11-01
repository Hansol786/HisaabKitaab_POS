@extends('dashboard.layout.master')

@section('content')
<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Categories</h4>
                    <div>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Categories</a></li>
                            <li class="breadcrumb-item active">Categories List</li>
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
                                <h4 class="header-title">Categories</h4>
                            </div>
                            <div class="col-md-6 text-align-right">
                                <button type="button" class="btn btn-success waves-effect waves-light"
                                data-bs-toggle="modal" data-bs-target="#add-category-model">Add Category</button>
                            </div>
                        </div>
                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>File</th>
                                    <th>Name</th>
                                    <th>Created At</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(isset($categories) && $categories->count() > 0)
                                @foreach ($categories as $category)
                                <tr>
                                    <td><img src="{{ asset('public/dashboard') }}/{{ $category->image }}" style="width:80px;"></td>
                                    <td>{{ $category->name ?? '' }}</td>
                                    <td>{{ $category->created_at ?? '' }}</td>
                                    <td>
                                        <a><i class="far fa-eye text-success font-size-16"></i></a> |
                                        <a><i class="far fa-edit text-primary font-size-16"></i></a> |
                                        <a><i class="fas fa-trash-alt text-danger font-size-16"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->

        <div id="add-category-model" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Category</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ url('submit_category') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body p-4">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="field-1" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="field-1" name="name" placeholder="Enter Category">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="field-3" class="form-label">Category Image</label>
                                    <input type="File" class="form-control" id="field-3" name="image">
                                </div>
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="field-3" class="form-label">Status</label>
                                    <select class="selectize-select">
                                        <option value="1">Active</option>
                                        <option value="0">In Active</option>
                                    </select>  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary waves-effect"data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info waves-effect waves-light">Add Category</button>
                    </div>
                    </form>
                </div>
            </div>
        </div><!-- /.modal -->

    </div>
    <!-- container -->
</div> <!-- content -->
@endsection
@push('js')

@endpush
