 
  
  
  <?php
    if (isset($_GET['sort']) && isset($_GET['sort']) == 'by_title')  {
        $sort = "SELECT * FROM books ORDER BY title ASC"; }
    if (isset($_GET['sort']) && isset($_GET['sort']) == 'by_author') {
        $sort = "SELECT * FROM books ORDER BY author ASC"; }
    if (isset($_GET['sort']) && isset($_GET['sort']) == 'by_year') {
        $sort = "SELECT * FROM books ORDER BY year ASC"; }
    if (isset($_GET['sort']) && isset($_GET['sort']) == 'by_default') {
        $sort = "SELECT * FROM books ORDER BY book_number ASC";}
 ?>



