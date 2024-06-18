@extends('Template.base')

@section('title', 'Film')

@section('content')
<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">


  <h4 class="py-3 mb-4">
    <span class="text-muted fw-light">DataTables /</span> Film
  </h4>

  <!-- Scrollable -->
  <div class="card">
    <div class="col-md-12 align-items-center justify-content-between" style="display: flex;">
      <h5 class="card-header">Data Film</h5>
      <!-- Button trigger modal -->
      <a href="{{ route('formc.film') }}" class="btn btn-primary" style="margin-right: 30px;">Add New</a>
    </div>
    <div class="card-datatable text-nowrap">
      <table class="dt-scrollableTable table table-bordered text-center">
        <thead>
          <tr>
            <th>Id</th>
            <th width="10%">Cover</th>
            <th width="30%">Title</th>
            <th>Platform</th>
            <th>Desc</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($film as $row)
          <tr>
            <td>{{ $row->id }}</td>
            <td>
              <img src="{{ $row->cover }}" class="img-fluid">
            </td>
            <td>
              <img src="{{ $row->title_img }}" class="img-fluid">
            </td>
            <td>{{ $row->platform1->platform }}</td>
            <td>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#info{{ $row->id }}">
                Desc
              </button>
            </td>
            <td>
              <a href="{{ route('forme.film', $row->id) }}" class="btn btn-secondary"><i class="bx-solid bx bx-pencil"></i></a>
              <button type="button" class="btn btn-danger align-items-center" data-bs-toggle="modal" data-bs-target="#delete{{ $row->id }}"><i class="bx bx-solid bx-trash"></i></button>
            </td>
          </tr>
          @include('Admin.Film.info')
          @include('Admin.Film.delete')
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <!--/ Scrollable -->
</div>
<!-- / Content -->


@endsection