@extends('Template.base')

@section('title', 'Platform')

@section('content')
<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4">
        <span class="text-muted fw-light">Datatables /</span> Platform
    </h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
        <div class="col-md-12 align-items-center justify-content-between" style="display: flex;">
            <h5 class="card-header">Data Platform</h5>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" style="margin-right: 30px;" data-bs-toggle="modal" data-bs-target="#modalc">
                Add New
            </button>
            @include('Admin.Platform.modalc')
        </div>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>PLatform</th>
                        <th width="10%">Logo</th>
                        <th>Link</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach($platform as $row)
                    <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->platform }}</td>
                        <td><!--  -->
                            <img src="{{ asset('storage/'.$row->logo) }}" class="img-fluid">
                        </td>
                        <td>{{ $row->link }}</td>
                        <td>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $row->id }}"><i class="bx bx-solid bx-trash"></i></button>
                        </td>
                    </tr>
                    @include('Admin.Platform.delete')
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Basic Bootstrap Table -->
</div>
<!-- / Content -->
@endsection