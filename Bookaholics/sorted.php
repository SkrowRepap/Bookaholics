<?php require './queries/connection.php';?>

<!doctype html>
<html lang="en">
<!-- Head -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Icon CSS -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <title>Bookaholics</title>
</head>
  <?php
    if ( isset ($_GET['action_delete']) && isset ($_GET['action_delete']) == 'delete'){
      $current_number = $_GET['book_number'];
      $current_row = "SELECT * FROM books WHERE book_number=$current_number";
      $result = mysqli_query($conn, $current_row);
      $c = mysqli_fetch_assoc($result);
      }
    
    if (isset ($_GET['action_edit']) && isset ($_GET['action_edit']) == 'edit'){
      $current_number = $_GET['book_number'];
      $current_row = "SELECT * FROM books WHERE book_number=$current_number";
      $result = mysqli_query($conn, $current_row);
      $c = mysqli_fetch_assoc($result);
      }
  ?>
<body>
  

  <!-- Navigation -->
  <?php include 'views/nav-bar.php'; ?>

  <!-- Action Modals -->
  <?php include 'views/modal-add.php'; ?>
  <?php include 'views/modal-edit.php'; ?>
  <?php include 'views/modal-delete.php'; ?>
  <?php
    if (isset ($_GET['by_title']))  {
        $string = 'by_title';
        $sort = "SELECT * FROM books ORDER BY title ASC"; }
    if (isset ($_GET['by_author'])) {
        $string = 'by_author';
        $sort = "SELECT * FROM books ORDER BY author ASC"; }
        if (isset ($_GET['by_year'])) {
          $string = 'by_year';
        $sort = "SELECT * FROM books ORDER BY year ASC"; }
        if (isset ($_GET['by_default'])) {
          $string = 'by_default';
        $sort = "SELECT * FROM books ORDER BY book_number ASC";}
 ?>
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
         <a class="text-info" href="?action_edit=edit&book_number='.$r['book_number'].'&'.$string.' ">Edit</a> 
         <a class="text-warning ml-3" href="?action_delete=delete&book_number='.$r['book_number'].'&'.$string.' ">Delete</a> 
         </td>
       </tbody>
       ';
     }
   }
     ?>

   </table>
 </div>
  <!-- Footer -->
  <footer class="footer position-relative text-white bg-dark py-4" style="bottom: 0;">
    <div class="container text-center">
      <span class="h6">© Christian Jay Anunciado. All Rights Reserved 2020-2021 </span>
    </div>
  </footer>
  

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
  </script>

  <?php
    // if action is delete... 
      if (isset ($_GET['action_delete']) && isset ($_GET['action_delete']) == 'delete') {
        echo "<script type='text/javascript'>
          $('#confirmModal').modal('show');
        </script>";
      } 

    // if action is edit... 
      if (isset ($_GET['action_edit']) && isset ($_GET['action_edit']) == 'edit') {
        echo "<script type='text/javascript'>
          $('#editModal').modal('show');
            </script>";
        }
  ?>

  <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>