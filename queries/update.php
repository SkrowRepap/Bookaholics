
    <?php require ('connection.php'); ?>
<?php
    if (isset($_POST['update'])) {
        $id = $_POST['current_bookNumber'];
        $updated_title = $_POST['update_title'];
        $updated_author = $_POST['update_author'];
        $updated_year = $_POST['update_year'];
        $updated_status = $_POST['update_status'];

        $update_query = "UPDATE `books` SET title='$updated_title', author='$updated_author', year='$updated_year', status='$updated_status' WHERE book_number='$id'";

        mysqli_query($conn,$update_query);

        $error = mysqli_error($conn);

        if ($error) {
            echo "Sorry something went wrong!";
        }

        header("Location: http://bookaholics.infinityfreeapp.com");
        exit;
    }

?>