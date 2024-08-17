<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Your Concern</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="partials/_updateComment.php" method="post">
                    <input type="hidden" id="commentidUpdate" name="commentidUpdate">
                    <div class="mb-3">
                        <label for="contentUpdate" class="form-label">Elaborate Your Concern</label>
                        <textarea class="form-control" id="contentUpdate" name="contentUpdate" rows="3"></textarea>
                    </div>
                    <div class="modal-footer d-block mr-auto">
                        <button type="submit" class="btn btn-success">Update</button>
                        <button type="button" class="btn btn-danger"
                            onclick="deleteThread(document.getElementById('commentidUpdate').value)">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>