<?php

session_start();
if(!isset($_SESSION['logged_in']) || !isset($_SESSION['user']))
{
  header('Location: index.html');
  die();
}


?>