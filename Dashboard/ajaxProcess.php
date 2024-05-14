<?php

require_once __DIR__.'/../Database/Query.php';

$queryOb = new Query();
$playerId = $_POST['playerId'];
$queryOb->deletePlayer($playerId);
$result = $queryOb->fetchPlayer();
?>
<?php if (!$result): ?>
  <h1>THERE IS NO PLAYER HAS ADDED!!</h1>
  <?php else: ?>
    <table class="table-success">
      <tr>
        <th>Player Name</th>
        <th>Run</th>
        <th>Number of Balls</th>
        <th>Strike Rate</th>
      </tr>
      <?php foreach ($result as $row) : ?>
        <tr>
          <td><?php echo $row['Name']?></td>
          <td><?php echo $row['Runs']?></td>
          <td><?php echo $row['Balls']?></td>
          <td><?php echo $row['Strike_Rate']?></td>
          <td><button class="button update" data-player-id="<?php echo $row['ID'] ?>">Edit</button></td>
          <td><button class="button delete" data-player-id="<?php echo $row['ID'] ?>">Remove</button></td>
        </tr>
      <?php endforeach; ?>
    </table>
<?php endif;?>
