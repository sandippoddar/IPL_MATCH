<?php
  require './Dashboard/addPlayerProcess.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <header>
  <nav class="navbar bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">IPL</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/addplayer">ADD PLAYERS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./Dashboard/logout.php">Logout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
  </header>
  <div class="container" style="width: 600px;">
  <h1 class="mb-3">Add Players</h1>
  <form action="/addplayer" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter Player name: </label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Enter Player Run</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="run">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword" class="form-label">Enter Number of Ball Faced by player</label>
    <input type="text" class="form-control" id="exampleInputPassword" name="ball">
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>
