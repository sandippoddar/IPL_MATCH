<?php
require_once './Database/Query.php';

$queryOb = new Query();
$result = $queryOb->fetchPlayer();
$maxStrike = $queryOb->maxStrikeRate()['Name'];
echo $maxStrike;
