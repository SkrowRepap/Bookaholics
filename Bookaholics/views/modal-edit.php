
<!-- Modal for editing -->
<div class="modal fade" style="display: none;" id="editModal" tabindex="-1" role="dialog" aria-labelledby="inputModalLabel" aria-hidden="true" data-backdrop="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title w-100 text-center font-weight-bold" id="inputModalLabel">Edit book</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!-- Modal Body -->
        <div class="modal-body mx-3">
          <form action="queries/update.php" method="post">
            <!-- Form -->
            <input type="hidden" name="update">
            <input type="hidden" name="current_bookNumber" value="<?php echo $c['book_number'] ?>">
            <div class="form-group row">
            <input type="hidden" name="insert">
              <label for="update_title" class="col-sm-2 col-form-label">Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="update_title" id="update_title" placeholder="Title" value="<?php echo $c['title'] ?>" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="update_author" class="col-sm-2 col-form-label">Author</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="update_author" id="update_author" value="<?php echo $c['author'] ?>" placeholder="Name" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="update_year" class="col-sm-2 col-form-label">Year</label>
              <div class="col-sm-10">
                <input type="number" min="0" max="2020" name="update_year" class="form-control" id="update_year" value="<?php echo $c['year'] ?>" placeholder="Year" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="update_status" class="col-sm-2 col-form-label">Status</label>
              <div class="col-sm-10">
                <select class="form-control" name="update_status" id="update_status" required>
                  <option selected disabled value=""><?php echo $c['status'] ?></option>
                  <option>Borrowed</option>
                  <option>Available</option>
                  <option>Not Available</option>
                </select>
              </div>
            </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" role="button" data-dismiss="modal" >Close</button>
          <button class="btn btn-success" type="submit">Update</button>
        </div>
        </form>
      </div>
    </div>
  </div>