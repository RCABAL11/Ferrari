<?php include ("connections/db_conn.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Bootstrap navbar -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
      .navbar {
    background: var(--bg-color);
    text-transform: uppercase;
    font-weight: 700;
    font-size: .9rem;
    letter-spacing: .1rem;
    }
    .navbar-brand img{
     height: 2rem;
    }
    .navbar-nav li {
      padding-right: .7rem;
    }
    .collapse .navbar-nav .nav-item .nav-link {
      color: #fff;
      padding-top: .8rem;
    }
    .collapse .navbar-nav .nav-item .nav-link.active,
    .collapse .navbar-nav .nav-item .nav-link:hover{
      color: #00abf0;
    }
    .navbar-brand {
      color: #00abf0;
    }
    
    </style>
</head>
<body>
<nav id="navbar" class="navbar navbar-expand-lg fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="dashboard.php"><img src="ferrari_logo.png" style="height: 2rem";>Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about" href="index.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" onclick="logout()">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Log out -->
<script src="js/java.js"></script>
<!-- Bootstrap Navbar -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>