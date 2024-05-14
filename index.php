<?php

$url = $_SERVER['REQUEST_URI'];
$urlArr = explode('/',$url);
$route = '';
if (strpos($urlArr[1],'?')) {
  $urlNew = explode('?',$urlArr[1]);
  $route = $urlNew[0];
}
else {
  $route = $urlArr[1];
}

switch ($route) {
  case '':
    require './Login/login.php';
    break;
  case 'login':
    require './Login/login.php';
    break;
  case 'admindashboard':
    require './Dashboard/adminDashboard.php';
    break;
  case 'addplayer':
    require './Dashboard/addPlayer.php';
    break;
  case 'anonymusdashboard':
    require './Dashboard/dashboardAnonymus.php';
    break;
}
