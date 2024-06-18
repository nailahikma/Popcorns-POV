<!-- Modal -->
<div class="modal fade" id="modalc" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">New Platfrom</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('add.cast') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row g-3">
                        <!-- Film -->
                        <div class="col-12">
                            <label class="form-label" for="id_film">Film</label>
                            <select id="id_film" name="id_film" class="form-select" aria-label="Default select example">
                                <option>Choose Film</option>
                                @foreach($film as $row)
                                <option value="{{ $row->id }}" {{ old('id_film') == $row->id ? 'selected': '' }}> {{ $row->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- img_cast -->
                        <div class="col-12">
                            <label class="form-label" for="img_cast">Pict</label>
                            <input type="file" class="form-control @error('img_cast') is-invalid @enderror" id="img_cast" name="img_cast">
                        </div>
                        <br><br>

                        <!-- Cast -->
                        <div class="col-12">
                            <label class="form-label" for="cast">Cast</label>
                            <input type="text" id="cast" name="cast" class="form-control" placeholder="Masukkan Cast" />
                        </div>
                        <br><br>

                        <!-- Role Name -->
                        <div class="col-12">
                            <label class="form-label" for="role_name">Role Name</label>
                            <input type="text" id="role_name" name="role_name" class="form-control" placeholder="Masukkan Role Name" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>