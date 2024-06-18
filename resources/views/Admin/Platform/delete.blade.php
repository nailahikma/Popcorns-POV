<!-- Small Modal -->
<div class="modal fade" id="delete{{ $row->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Delete Genre</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('delete.platform') }}" method="post">
                <div class="modal-body">
                    @csrf
                    @method('DELETE')
                    <p class="text-center">Are you sure you want to delete <strong style="color: red;">{{ $row->platform }}</strong>?</p>
                    <input type="hidden" name="id" value="{{ $row->id }}">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>