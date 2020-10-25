<?php require ('connection.php'); ?>

<?php
    if (isset($_GET['action']) && isset($_GET['book_number']) && $_GET['action'] == 'delete') {

        $number = $_GET['book_number'];
        $delete_query = "DELETE FROM books WHERE book_number=$number";
        
        mysqli_query($conn, $delete_query);
      
        $error = mysqli_error($conn);
        if ($error) {
          echo "Sorry something went wrong!";
        }

        header("Location: http://bookaholics.infinityfreeapp.com");
        exit;
      }
  
?> 