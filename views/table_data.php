 
 <?php require ('queries/connection.php'); ?>

 <!-- Data Table -->
 <div class="container d-flex flex-column position-relative" style="top:70px; margin-bottom: 70px;">
    <h1 class="display-5 text-center">BOOKS</h1>
    <table class="table table-hover">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Book No.</th>
          <th scope="col">Title</th>
          <th scope="col">Author</th>
          <th scope="col">Year</th>
          <th scope="col">Status</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <?php
      $result = mysqli_query($conn, $sort);
      if (mysqli_num_rows($result) > 0) {
      while ($r = mysqli_fetch_assoc($result)) {
        echo '
          <tbody>
          <tr>
          <td> ' . $r['book_number'] . ' </td>
          <td> ' . $r['title'] . '       </td>
          <td> ' . $r['author'] . '      </td>
          <td> ' . $r['year'] . '        </td>
          <td> ' . $r['status'] . '      </td>
          <td> 
          <a class="text-info" href="?action_edit=edit&book_number=' . $r['book_number'] . ' ">Edit</a> 
          <a class="text-warning ml-3" href=" ?action_delete=delete&book_number=' . $r['book_number'] . ' ">Delete</a> 
          </td>
        </tbody>
        ';
      }
    }
      ?>

    </table>
  </div>
