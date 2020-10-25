
<!-- Modal for adding -->
<div class="modal fade" style="display: none;" id="inputModal" tabindex="-1" role="dialog" aria-labelledby="inputModalLabel" aria-hidden="true" data-backdrop="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title w-100 text-center font-weight-bold" id="inputModalLabel">Add book</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!-- Modal Body -->
        <div class="modal-body mx-3">
          <form action="queries/insert.php" method="post">
            <!-- Form -->
            <div class="form-group row">
            <input type="hidden" name="insert">
              <label for="title" class="col-sm-2 col-form-label">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="title" id="title" placeholder="Title" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="author" class="col-sm-2 col-form-label">Author</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="author" id="author" placeholder="Name" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="year" class="col-sm-2 col-form-label">Year</label>
              <div class="col-sm-10">
                <input type="number" min="0" max="2020" name="year" class="form-control" id="year" placeholder="Year" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="status" class="col-sm-2 col-form-label">Status</label>
              <div class="col-sm-10">
                <select class="form-control" name="status" id="status" required>
                  <option selected disabled value="">Choose...</option>
                  <option>Borrowed</option>
                  <option>Available</option>
                  <option>Not Available</option>
                </select>
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button class="btn btn-primary" type="submit">Add</button>
        </div>
        </form>
      </div>
    </div>
  </div>