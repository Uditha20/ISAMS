<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

   <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="#dashboard">
<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">ISAMS</a>
  <button class="navbar-toggler position-relative d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 
  </div>
</header>

<section id="dashboard-nav">
<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse navbar-light bg-light">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link text-muted" aria-current="page" href="#">
              <h6>Dashboard</h6>
            </a>
          </li>
         
          <li class="nav-item ">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-title">Event shedule</span>
              <i class="bi bi-chevron-down"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href=""> Add Event </a></li>
                <li class="nav-item"> <a class="nav-link" href=""> Manage Event </a></li>
              </ul>
            </div>
          </li>
         
         
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Voting report
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-muted mt-5" aria-current="page" href="#">
              <h6>sign out</h6>
            </a>
          </li>
        </ul>
      </div>
    </nav>

  </div>  
</section>
  </body>
</html>