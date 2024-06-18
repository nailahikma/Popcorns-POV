@extends('Template.base')

@section('title', 'Formc Film')

@section('content')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Film</h4>
    <!-- Multi Column with Form Separator -->
    <div class="card mb-4">
        <h5 class="card-header">New Film</h5>
        <form class="card-body" action="{{ route('add.film') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">
                <div class="col-12 col-md-6">
                    <label class="form-label" for="cover">Cover</label>
                    <input type="text" class="form-control" id="cover" name="cover">
                </div>
                <div class="col-12 col-md-6">
                    <label class="form-label" for="bg">Background</label>
                    <input type="text" class="form-control" id="bg" name="bg">
                </div>

                <div class="col-12 col-md-6">
                    <label class="form-label" for="title_img">Title Image</label>
                    <input type="text" id="title_img" name="title_img" class="form-control" placeholder="Enter Title_img" />
                </div>
                <div class="col-12 col-md-6">
                    <label class="form-label" for="title">Title</label>
                    <input type="text" id="title" name="title" class="form-control" placeholder="Enter Title" />
                </div>
                
                <div class="col-12 col-md-6">
                    <label class="form-label" for="trailer">Trailer</label>
                    <input type="text" id="trailer" name="trailer" class="form-control" placeholder="Enter Link" />
                </div>
                <div class="col-12 col-md-6">
                    <label class="form-label" for="year">Year</label>
                    <input type="number" id="year" name="year" class="form-control" placeholder="Enter year" />
                </div>

                <div class="col-12 col-md-6">
                    <label class="form-label" for="duration">Duration</label>
                    <input type="text" id="duration" name="duration" class="form-control" placeholder="Enter duration" />
                </div>
                <div class="col-12 col-md-6">
                    <label class="form-label" for="id_platform">Platform</label>
                    <select id="id_platform" name="id_platform" class="form-select" aria-label="Default select example">
                        <option>Choose Platform</option>
                        @foreach($platform as $row)
                        <option value="{{ $row->id }}" {{ old('id_platform') == $row->id ? 'selected': '' }}> {{ $row->platform }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Desc -->
                <div class="col-12">
                    <label class="form-label" for="desc">Desc</label>
                    <textarea type="text" id="desc" name="desc" class="form-control" placeholder="Enter Film's Desc"></textarea>
                </div>

                <div class="col-12 col-md-6">
                    <label class="form-label" for="rating">Rating</label>
                    <select id="rating" name="rating" class="form-select" aria-label="Default select example">
                        <option selected>Rating</option>
                        <option value="1">SU</option>
                        <option value="2">+7</option>
                        <option value="3">+13</option>
                        <option value="4">+21</option>
                    </select>
                </div>
                <div class="col-12 col-md-6">
                    <label class="form-label" for="id_genre">Genre</label>
                    <select id="id_genre" name="id_genre" class="form-select" aria-label="Default select example">
                        <option>Choose Genre</option>
                        @foreach($genre as $row)
                        <option value="{{ $row->id }}" {{ old('id_genre') == $row->id ? 'selected': '' }}> {{ $row->genre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-12 col-md-6">
                    <label class="form-label" for="director">Director</label>
                    <input type="text" id="director" name="director" class="form-control" placeholder="Enter Director" />
                </div>
                <div class="col-12 col-md-6">
                    <label class="form-label" for="producer">Producer</label>
                    <input type="text" id="producer" name="producer" class="form-control" placeholder="Enter Producer" />
                </div>

                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                    <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- / Content -->
@endsection