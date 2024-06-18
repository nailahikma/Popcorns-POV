<!-- Modal -->
<div class="modal fade" id="modalc" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCenterTitle">New Platfrom</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('add.platform') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row g-3">
                        <!-- Platfrom -->
                        <div class="col-12">
                            <label class="form-label" for="platform">Platform</label>
                            <input type="text" id="platform" name="platform" class="form-control" placeholder="Masukkan Platform" />
                        </div>
                        <!-- Logo -->
                        <div class="col-12">
                            <label class="form-label" for="logo">Logo</label>
                            <input type="file" class="form-control @error('logo') is-invalid @enderror" id="logo" name="logo">
                        </div>
                        <br>
                        <!-- Link -->
                        <div class="col-12">
                            <label class="form-label" for="link">Link</label>
                            <input type="text" id="link" name="link" class="form-control" placeholder="Masukkan Link" />
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