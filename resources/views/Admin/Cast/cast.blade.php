@extends('Template.base')

@section('title', 'Cast')

@section('content')
<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Datatables /</span> Cast
    </h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
        <div class="col-md-12 align-items-center justify-content-between" style="display: flex;">
            <h5 class="card-header">Data Cast</h5>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" style="margin-right: 30px;" data-bs-toggle="modal" data-bs-target="#modalc">
                Add New
            </button>
            @include('Admin.Cast.modalc')
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
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Film</th>
                        <th width="10%">Pict</th>
                        <th>Cast</th>
                        <th>Role Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach($cast as $row)
                    <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->film1->title }}</td>
                        <td>
                            <img src="{{ asset('storage/'.$row->img_cast) }}" class="img-fluid">
                        </td>
                        <td>{{ $row->cast }}</td>
                        <td>{{ $row->role_name }}</td>
                        <td>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $row->id }}"><i class="bx bx-solid bx-trash"></i></button>
                        </td>
                    </tr>
                    @include('Admin.Cast.delete')
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->
</div>
<!-- / Content -->
@endsection