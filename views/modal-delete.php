
<!-- Modal for deleting -->
<div class="modal fade" style="display: none;" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="inputModalLabel" aria-hidden="true" data-backdrop="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title w-100 text-center font-weight-bold" id="inputModalLabel">Confirm Delete?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!-- Modal Body -->
        <div class="modal-body mx-3">
          Are you sure you want to delete the book <em><?php echo $c['title'] ?></em>?
        </div>
        <div class="modal-footer">
        <button class="btn btn-secondary" role="button" data-dismiss="modal" >No</button>
          <?php
          echo '
          <a class="btn btn-danger"  href="/queries/delete.php?action=delete&book_number='.$c['book_number'].'" value="Insert">Yes</a>
          ';
          ?>
        </div>
      </div>
    </div>
  </div>