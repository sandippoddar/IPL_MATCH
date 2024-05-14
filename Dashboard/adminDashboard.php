<?php
require_once './Database/Query.php';

$queryOb = new Query();
$result = $queryOb->fetchPlayer();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
  <section class="player">
        <?php if (!$result): ?>
            <h1>THERE IS NO PLAYER HAS ADDED!!</h1>
            <?php else: ?>
              <table class="table">
                <tr>
                  <th>Player Name</th>
                  <th>Run</th>
                  <th>Number of Balls</th>
                  <th>Strike Rate</th>
                </tr>
                <?php foreach ($result as $row) : ?>
                  <tr>
                    <td class="name"><?php echo $row['Name']?></td>
                    <td class="run"><?php echo $row['Runs']?></td>
                    <td class="ball"><?php echo $row['Balls']?></td>
                    <td><?php echo $row['Strike_Rate']?></td>
                    <td><button class="button update" data-player-id="<?php echo $row['ID'] ?>">Edit</button></td>
                    <td><button class="button delete" data-player-id="<?php echo $row['ID'] ?>">Remove</button></td>
                  </tr>
                <?php endforeach; ?>
              </table>
          <?php endif;?>
          </section>
          <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Stock</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editForm">
                    <input type="hidden" id="editId" name="editId">
                    <div class="form-group">
                        <label for="editName">Player Name:</label>
                        <input type="text" class="form-control" id="editName" name="editName">
                    </div>
                    <div class="form-group">
                        <label for="editRun">Run scored by Player:</label>
                        <input type="text" class="form-control" id="editRun" name="editRun">
                    </div>
                    <div class="form-group">
                        <label for="editBall">Number of ball faced by Player: </label>
                        <input type="text" class="form-control" id="editBall" name="editBall">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="./AJAX/adminJS.js"></script>
</html>
