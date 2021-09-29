<!DOCTYPE html>
<html>
<head>
        <title>MiRotterdam - <?= (isset($title) ? $title : "Not set" ); ?> </title>
        <style>
          html {
            scroll-behavior: smooth;
          }
        </style>
        <link rel="stylesheet" href="css/global.css">
        <script src="js/bootstrap.bundle.js"></script>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/home.css">
</head>

<body>
<!-- <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(92, 139, 87);">
  <a class="navbar-brand" href="home.php">MiRotterdam</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="locations.php">Locaties</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="home.php#overons">Over ons</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="home.php#contact">Contact</a>
      </li>
    </ul>
  </div>
</nav> -->

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(92, 139, 87);">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php">MiRotterdam</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="locations.php">Locaties</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="home.php#overons">Over ons</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="home.php#contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>