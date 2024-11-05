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
                                        <th>Status</th>
                                        <th>Created At</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(isset($brands) && $brands->count() > 0)
                                    @foreach ($brands as $brand)
                                        <tr>
                                            <td>
                                                <img src="{{ asset('public/dashboard') }}/{{ $brand->image }}" style="width:50px; border-radius:30%;">
                                            </td>
                                            <th>{{ $brand->name ?? '' }}</th>
                                            <td>
                                                @if($brand->status == "1")
                                                    <button class="btn btn-success btn-sm">Active</button>
                                                @else
                                                    <button class="btn btn-danger btn-sm">In Active</button>
                                                @endif
                                            </td>
                                            <td>{{ $brand->created_at ? $brand->created_at->format('Y-m-d') : '' }}</td>
                                            <td>
                                                <a href="javascript:void(0)" class="edit-brand" data-id="{{ $brand->id }}">
                                                    <i class="far fa-edit text-primary font-size-16"></i>
                                                </a> |
                                                <a href="{{ url('delete_brand') }}/{{ $brand->id }}" id="delete" data-id="{{ $brand->id }}">
                                                    <i class="fas fa-trash-alt text-danger font-size-16"></i>
                                                </a>
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

            <!-- Add Brand model starts -->
            <div id="add-brand-model" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Add Brand</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ url('submit_brand') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body p-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="field-1" class="form-label">Name <span class="red-text">*</span></label>
                                            <input type="text" class="form-control" id="field-1" name="name" placeholder="Enter Brand">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="field-3" class="form-label">Brand Image</label>
                                            <input type="File" class="form-control" id="field-3" name="image">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="field-3" class="form-label">Status</label>
                                            <select class="selectize-select" name="status">
                                                <option value="1">Active</option>
                                                <option value="0">In Active</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button"
                                    class="btn btn-secondary waves-effect"data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-info waves-effect waves-light">Add Brand</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Add Brand model ends -->
            <!-- Edit Category model start -->
            <div id="edit-brand-model" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Brand</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ url('update_brand') }}" method="POST" enctype="multipart/form-data" id="editCategoryForm">
                            @csrf
                            <input type="hidden" name="id" id="edit-brand-id">
                            <div class="modal-body p-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="edit-name" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="edit-name" name="name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="edit-image" class="form-label">Brand Image</label>
                                            <input type="file" class="form-control" id="edit-image" name="image">
                                            <img id="current-image" src="" alt="Current Image" style="width: 100px; border-radius: 5%;" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="edit-status" class="form-label">Status</label>
                                            <select class="selectize-select" name="status" id="edit-status">
                                                <option value="1">Active</option>
                                                <option value="0">In Active</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-info">Update Brand</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Edit Brand modal end -->
        </div>
        <!-- container -->
    </div> <!-- content -->
@endsection
@push('js')
    <script>
         $(document).ready(function() {
            // CSRF Token Setup
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            // Edit brand funcationality
            $(document).on('click', '.edit-brand', function() {
                var brandId = $(this).data('id');
                $.ajax({
                    url: '{{ url("get_brand") }}/' + brandId,
                    method: 'GET',
                    success: function(response) {
                        $('#edit-brand-id').val(response.id);
                        $('#edit-name').val(response.name);
                        $('#current-image').attr('src', '{{ asset('public/dashboard') }}/' + response.image); // Set the image source
                        $('#edit-status').val(response.status);
                        $('#edit-brand-model').modal('show');
                    },
                    error: function(xhr) {
                        console.error(xhr.responseText);
                        alert('Error fetching brand data.');
                    }
                });
            });
            // Delete category funcationality
           $(document).on('click', '#delete', function(event) {
                event.preventDefault();
                var deleteUrl = $(this).attr('href');
                // Show a confirmation dialog
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Navigate to the delete URL
                        window.location.href = deleteUrl;
                    }
                });
            })
        }); // document ready end here

    </script>
@endpush