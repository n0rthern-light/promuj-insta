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

echo 'Zalogowano poprawnie :-) , Witaj '.$_SESSION['user']['username'].'!<br/>';
echo '<br/>URL SZYBKIEGO LOGOWANIA: http://promuj-insta.pl/panel.php?token='.hash_hmac('sha256', $_SESSION['user']['id'].$_SESSION['user']['password'], $key).'<br/>';
echo '<a href="logout.php">Wyloguj.</a>';
echo '<br/><br/>';
print_r($_SESSION['user']);

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
  <link rel="stylesheet" href="panel/main.css">
</head>



<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <a class="navbar-brand enlarged_bolded_text" href="index.html">Promuj-Insta.pl</a>
      <button style="border:none;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor03">
        <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                  <a class="nav-link" href="#">Regulamin</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Polityka prywatności</a>
              </li>
        </ul>
      </div>
    </nav>
  </header>

  <main>
    <div id="heroimage">
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top">
            <button style="border:none;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor03">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Regulamin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Polityka prywatności</a>
                </li>
              </ul>
            </div>
          </nav>
      <div id="heroimage_content">
        <h1 class="hero_big_title">Promuj-Insta.pl</h1>
          <div id="heroimage_instagram">
            <div class="heroimage_instagram_animation">
              <i class="fa fa-heart"></i><span id="likes" class="insta_number">0</span>
            </div>
            <div class="heroimage_instagram_animation">
              <i class="fa fa-users"></i><span id="followers" class="insta_number">0</span>
            </div>
          </div>
        <p>Automatyczne pozyskiwanie nowych zasięgów.</p>
        <button id="start_btn" type="button" class="btn btn-primary instagram_color"><i class="fa fa-instagram" style="font-size: 1.1em;"></i> Zaloguj się przez Instagram aby rozpocząć</button>
      </div>
    </div>
    <div id="content" style="background-color: white;">
        <form>
            <fieldset>
              <legend>Zaloguj się danymi z Instagrama</legend>
              <div class="form-group">
                <label for="exampleInputEmail1">Login</label>
                <input type="text" class="form-control" id="login" aria-describedby="emailHelp" placeholder="Login">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Hasło</label>
                <input type="password" class="form-control" id="password" placeholder="Hasło">
              </div>
              <small id="emailHelp" class="form-text text-muted">Niezaszyfrowany pozostaje tylko Twój Login.<br/>Twoje Hasło pozostaje bezpieczne.</small>
              <div class="loader">
                <div class="lds-ring">
                  <div></div>
                  <div></div>
                  <div></div>
                  <div></div>
                </div>
              </div>
              <button id="LoginBtn" type="submit" class="btn btn-primary">Zaloguj</button>
            </fieldset>
        </form>
    </div>
  </main>

  <footer>

  </footer>



  <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <script src="panel/main.js"></script>
</body>
</html>