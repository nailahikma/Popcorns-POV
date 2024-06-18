@extends('Template.base')

@section('title', 'Genre')

@section('content')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Datatables /</span> Genre
    </h4>

    <!-- Responsive Datatable -->
    <div class="card">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-12 align-items-center justify-content-between" style="display: flex;">
                <h5 class="card-header">Data Genre</h5>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" style="margin-right: 30px;" data-bs-toggle="modal" data-bs-target="#modalc">
                    Add New
                </button>
                @include('Admin.Genre.modalc')
            </div>
            @if(Session::get('Create'))
            <div class="card-body">
                <!-- Alert Create -->
                <div class="alert alert-primary alert-dismissible" role="alert">
                    {{ Session::get('Create') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <!-- Alert Delete -->
                @if(Session::get('Delete'))
                <div class="alert alert-danger alert-dismissible" role="alert">
                    {{ Session::get('Delete') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- End Alert -->
            </div>
            @endif
        </div>
        <div class="table-responsive">
            <table class="table border-top">
                <thead>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>Genre</th>
                        <th>Slug</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($genre as $row)
                    <tr>

                        <td></td>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->genre }}</td>
                        <td>{{ $row->slug }}</td>
                        <td>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $row->id }}"><i class="bx bx-solid bx-trash"></i></button>
                        </td>
                    </tr>
                    @include('Admin.Genre.delete')
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Responsive Datatable -->
</div>
<!-- / Content -->
@endsection