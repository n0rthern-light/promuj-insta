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
$key = '#m@RB^.q&Q.SP^.!';
/*
echo 'Zalogowano poprawnie :-) , Witaj '.$_SESSION['user']['username'].'!<br/>';
echo '<br/>URL SZYBKIEGO LOGOWANIA: http://promuj-insta.pl/panel.php?token='.hash_hmac('sha256', $_SESSION['user']['id'].$_SESSION['user']['password'], $key).'<br/>';
echo '<a href="logout.php">Wyloguj.</a>';
echo '<br/><br/>';
print_r($_SESSION['user']);
*/
?>



<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Promuj-Insta.pl - Automatyczne promowanie Instagrama.</title>
  <meta name="description" content="Automatyczne promowanie Instagrama dla wszystkich!">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="panel/main.css?v=1">
</head>



<body>

  <header>
  </header>

  <main style="text-align: center;">
    <div style="width: 80%; margin: 50px auto 0 auto;">
      <div class="alert alert-dismissible alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Brawo!</strong> Udało Ci się poprawnie zalogować do naszego panelu!<br/> Z powodu, że często zdaża się że Instagram blokuje logowanie na naszej stronie,
         <br/><strong>Zapisz ten link do awaryjnego/szybkiego logowania:</strong><br/><span style="color: orange;"><?php echo 'http://promuj-insta.pl/panel.php?token='.hash_hmac('sha256', $_SESSION['user']['id'].$_SESSION['user']['password'], $key); ?></span><br/>
          Pozwoli Ci się on się zalogować w momentach, gdy tradycyjna metoda nie zadziała. Wystarczy, że wkleisz go do przeglądarki!<br/>Powyższy link jest ważny do czasu zmiany twojego hasła instagram - wtedy potrzebne jest ponowne zalogowanie na naszej stronie (nie zmieniaj nazwy użytkownika na czas korzystania z naszych usług).<br/>
          <strong>To najważniejsze co musisz wiedzieć. Pozostaje Ci nic innego jak tylko wypromować swój Instagram!</strong>
      </div>
    </div>
  </main>



  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <script src="panel/main.js?v=1"></script>
</body>
</html>