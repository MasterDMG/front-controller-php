<?php
    
    $login=$_POST['login'];
    $password=md5($_POST['pass']);
    $user_data = fopen('../data/users.csv','a');
    fwrite($user_data, $login.','.$password.PHP_EOL);
    header('Location: http://localhost/sign-up');
    exit;
    