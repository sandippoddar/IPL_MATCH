<?php
require_once './Database/Query.php';

$queryOb = new Query();

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $ball = $_POST['ball'];
  $run = $_POST['run'];
  $queryOb->insert($name,$run,$ball);
}
