<?php
    
    $login=$_POST['login'];
    $password=md5($_POST['pass']);
    include_once('config.php');
    $users=[
        $login => $password,
    ];