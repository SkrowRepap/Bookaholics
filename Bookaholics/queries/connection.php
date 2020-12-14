
<?php
    
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'books';


	// $dbhost = 'sql110.epizy.com';
	// $dbuser = 'epiz_27047207';
	// $dbpass = 'uhZu4O9CyUf2j';
	// $dbname = 'epiz_27047207_books';
	
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>