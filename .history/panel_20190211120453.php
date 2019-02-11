<?php

if(!isset($_GET['token']))
  return;

$token = $_GET['token'];

$url = 'https://promuj-insta-backend.herokuapp.com/request_user_from_token';
$data = array('token' => $token);

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

if(strlen($result)) {
  $dec_res = json_decode($result, true);
  session_start();
  $_SESSION['logged_in'] = true;
} else {
  header('Location: index.html');
  die();
}

?>