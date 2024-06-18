@extends('Template.base')

@section('title', 'Forme Film')

@section('content')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Film</h4>
    <!-- Multi Column with Form Separator -->
    <div class="card mb-4">
        <h5 class="card-header">New Film</h5>
        <form class="card-body" action="{{ route('edit.film', $film->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row g-3">
                
                <div class="col-12 col-md-6">
                    <label class="form-label" for="cover">Cover</label>
                    <input type="text" class="form-control" id="cover" name="cover" value="{{ $film->cover }}>">
                </div>
                <div class="col-12 col-md-6">
                    <label class="form-label" for="bg">Background</label>
                    <input type="text" class="form-control" id="bg" name="bg" value="{{ $film->bg }}">
                </div>

                <div class="col-12 col-md-6">
                    <label class="form-label" for="title_img">Title Image</label>
                    <input type="text" id="title_img" name="title_img" class="form-control" value="{{ $film->title_img }}" />
                </div>
                <div class="col-12 col-md-6">
                    <label class="form-label" for="title">Title</label>
                    <input type="text" id="title" name="title" class="form-control" value="{{ $film->title }}" />
                </div>

                <div class="col-12 col-md-6">
                    <label class="form-label" for="trailer">Trailer</label>
                    <input type="text" id="trailer" name="trailer" class="form-control" value="{{ $film->trailer }}" />
                </div>
                <div class="col-12 col-md-6">
                    <label class="form-label" for="year">Year</label>
                    <input type="text" id="year" name="year" class="form-control" value="{{ $film->year }}" />
                </div>
                
                <div class="col-12 col-md-6">
                    <label class="form-label" for="duration">Duration</label>
                    <input type="text" id="duration" name="duration" class="form-control" value="{{ $film->duration }}" />
                </div>
                <div class="col-12 col-md-6">
                    <label class="form-label" for="id_platform">Platform</label>
                    <select id="id_platform" name="id_platform" class="form-select" aria-label="Default select example">
                        <option value="{{ $film->id_platform }}">{{ $film->platform1->platform }}</option>
                        @foreach($platform as $row)
                        <option value="{{ $row->id }}" {{ old('id_platform') == $row->id ? 'selected': '' }}> {{ $row->platform }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Desc -->
                <div class="col-12">
                    <label class="form-label" for="desc">Desc</label>
                    <textarea type="text" id="desc" name="desc" class="form-control" >{{ $film->desc }}</textarea>
                </div>

                <div class="col-12 col-md-6">
                    <label class="form-label" for="rating">Rating</label>
                    <select id="rating" name="rating" class="form-select" aria-label="Default select example">
                        <option selected>{{ $film->rating }}</option>
                        <option value="SU">G</option>
                        <option value="+7">+7</option>
                        <option value="+13">+13</option>
                        <option value="+21">+21</option>
                    </select>
                </div>
                <div class="col-12 col-md-6">
                    <label class="form-label" for="id_genre">Genre</label>
                    <select id="id_genre" name="id_genre" class="form-select" aria-label="Default select example">
                        <option value="{{ $film->id_genre }}">{{ $film->genre1->genre }}</option>
                        @foreach($genre as $row)
                        <option value="{{ $row->id }}" {{ old('id_genre') == $row->id ? 'selected': '' }}> {{ $row->genre }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-12 col-md-6">
                    <label class="form-label" for="director">Director</label>
                    <input type="text" id="director" name="director" class="form-control" value="{{ $film->director }}" />
                </div>
                <div class="col-12 col-md-6">
                    <label class="form-label" for="producer">Producer</label>
                    <input type="text" id="producer" name="producer" class="form-control" value="{{ $film->producer }}" />
                </div>

                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Save</button>
                    <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- / Content -->
@endsection