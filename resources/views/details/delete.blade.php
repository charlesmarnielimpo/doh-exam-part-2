<div class="modal" tabindex="-1" id="delete-{{ $detail->id }}">
    <div class="modal-dialog">
        <form action="{{ route('crud.destroy', $detail->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Applicant</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete <strong>{{ $detail->full_name }}</strong>?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">yes</button>
                </div>
            </div>
        </form>
    </div>
</div>