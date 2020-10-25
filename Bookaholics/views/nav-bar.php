

<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand ml-4 text-warning" href="/Bookaholics/index.php">
      <img src="assets/images/pngaaa.com-21504.png" width="30" height="30" alt="" loading="lazy">
      Bookaholics</a>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputModal">
      Add book
    </button>
    <div class="navbar-nav dropdown ml-auto mr-sm-3">
      <div class="nav-item dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Sort
      </div>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="sorted.php?by_title">by title</a>
        <a class="dropdown-item" href="sorted.php?by_author">by author</a>
        <a class="dropdown-item" href="sorted.php?by_year">by year</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="sorted.php?by_default">Default</a>
      </div>
    </div>
    <form action="searched.php" class="form-inline my-2 my-lg-0">
      <input type="hidden" name="search">
      <input class="form-control mr-sm-2" name="string" id="string" type="search" placeholder="Book Title/Author" aria-label="Search" required>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
  </div>
</nav>