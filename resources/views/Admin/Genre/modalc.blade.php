<!-- Modal -->
<div class="modal fade" id="modalc" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">Add New Genre</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('add.genre') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <!-- Genre -->
                        <div class="col-12">
                            <label class="form-label" for="genre">Genre</label>
                            <input type="text" id="genre" name="genre" class="form-control" placeholder="Tambah Genre" />
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