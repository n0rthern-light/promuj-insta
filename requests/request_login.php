<?php

  if(!isset($_POST['login']) || !isset($_POST['password'])) {
    echo 'e:Należy uzupełnić pola logowania!';
    return;
  }
  
$url = 'https://promuj-insta-backend.herokuapp.com/login_instagram';
$data = array('login' => $_POST['login'], 'password' => $_POST['password']);

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { echo 'e:Bład serwera, proszę zgłoś to na email: support@promuj-insta.pl'; return; }
echo $result;





?>