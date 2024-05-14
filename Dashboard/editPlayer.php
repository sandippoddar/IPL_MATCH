<?php

require_once __DIR__.'/../Database/Query.php';

$queryOb = new Query();
$id = $_POST['id'];
$name = $_POST['name'];
$run = $_POST['run'];
$ball = $_POST['ball'];

$queryOb->editPlayer($id, $name, $run, $ball);
$result = $queryOb->fetchPlayer();
?>
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
