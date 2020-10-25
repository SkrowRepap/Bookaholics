
    <?php require ('connection.php'); ?>
<?php

  $rowSQL = mysqli_query($conn, "SELECT MAX(book_number) AS max FROM books");
  $row = mysqli_fetch_array($rowSQL);
  $largestNumber = $row['max'];
  $error = mysqli_error($conn);
  
  // Insert
if (
  isset($_POST['insert'])
) { 
  $title = $_POST['title'];
  $author = $_POST['author'];
  $year = $_POST['year'];
  $status = $_POST['status'];
  $insert_query = "INSERT INTO books VALUES($largestNumber + 1, '$title', '$author', '$year', '$status')";
  mysqli_query($conn, $insert_query);
  
  if ($error) {
    echo "Sorry something went wrong!";
  }
  header("Location: http://bookaholics.infinityfreeapp.com");
  exit;
}

?>