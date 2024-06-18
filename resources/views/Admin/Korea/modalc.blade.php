<!-- Modal -->
<div class="modal fade" id="modalc" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">New Platfrom</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('add.korea') }}" method="post">
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