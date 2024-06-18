@extends('Template.base')

@section('title', 'Film')

@section('content')
<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">


  <h4 class="py-3 mb-4">
    <span class="text-muted fw-light">DataTables /</span> Review
  </h4>

  <!-- Scrollable -->
  <div class="card">
    <div class="col-md-12 align-items-center justify-content-between" style="display: flex;">
      <h5 class="card-header">Data Review</h5>
    </div>
    <div class="card-datatable text-nowrap">
      <table class="dt-scrollableTable table table-bordered">
        <thead>
          <tr>
            <th>User</th>
            <th>Film</th>
            <th>Review</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @foreach($review as $row)
          <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->user->username }}</td>
            <td>{{ $row->film->title }}</td>
            <td>
              <button type="button" class="btn rounded-pill btn-primary" data-bs-toggle="modal" data-bs-target="#review{{ $row->id }}">Primary</button>
            </td>
            <td>
              <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $row->id }}"><i class="bx bx-solid bx-trash"></i></button>
            </td>
          </tr>
          @include('Admin.Platform.delete')
          @include('Admin.Platform.show')
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <!--/ Scrollable -->
</div>
<!-- / Content -->


@endsection