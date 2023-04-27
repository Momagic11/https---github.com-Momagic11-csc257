<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ADMIN SECTION</a>
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarText"
      aria-controls="navbarText"
      aria-expanded="false"
      aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link">Logged in as <?=$adminUser->get_fullName()?></a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php if ($currentPage == 'list_entries') { echo 'active'; } ?>" href="list_entries.php">List Entries</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php if ($currentPage == 'list_cruise_lines') { echo 'active'; } ?>" href="list_cruise_lines.php">List Cruise Lines</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php if ($currentPage == 'list_destinations') { echo 'active'; } ?>" href="list_destinations.php">List Destinations</a>
        </li>
      </ul>

      <span class="navbar-text">
        <a href="dashboard.php">Dashboard</a>  
      </span>
      &nbsp;
      &nbsp;
      <span class="navbar-text">
        <a href="admin_logout.php">LOGOUT</a>  
      </span>
    </div>
  </div>
</nav>
