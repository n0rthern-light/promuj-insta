<?php

session_start();
if(!isset($_SESSION['logged_in']) || !isset($_SESSION['user']))
{
  header('Location: index.html');
  die();
}

if($_SESSION['logged_in'] !== true) {
  header('Location: index.html');
  die();
}


echo 'Zalogowano poprawnie :-) , Witaj '.$_SESSION['user']['username'].'!<br/>';
echo '<a href="logout.php">Wyloguj.</a>';
echo '<br/><br/>';
print_r($_SESSION['user']);

?>