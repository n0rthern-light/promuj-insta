<?php
   $key = '#m@RB^.q&Q.SP^.!';


  if(!isset($_POST['login']) || !isset($_POST['password']) || (!strlen($_POST['login']) || (!strlen($_POST['password'])))) {
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

$decoded = json_decode($result, true);

if($decoded['status'] == "ok"){
  echo $decoded['user']['id'].' => '.hash_hmac('sha256', $decoded['user']['id'], $key);
} else {
  echo '';
}

?>