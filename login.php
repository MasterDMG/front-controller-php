<?php

if($_POST){
    if (isset($_SESSION['user'])) {
        $messages = [
            'Jesteś aktualnie zalogowany!',
        ];
        $_SESSION['messages'] = $messages;
        
        header('Location: http://localhost'); 
        exit;
    }

    $users = @fopen('users.csv','r');

    if ($users === false) {
        $messages = [
            'Błąd odczytu pliku!',
        ];
        $_SESSION['messages'] = $messages;

        header('Location: http://localhost');
        exit;
    }

    $tab = [];

    while(!feof($users)){
        $line = fgets($users);
        $tab=(explode(",",$line));
        
        $login=trim($tab[0]);
        $pass=trim($tab[1]);
        if ($_POST['login']===$login && md5($_POST['pass'])===$pass) {
            $userData = [
                'name' => $username,
            ];

            $_SESSION['user'] = $userData;
            $_SESION['logged'] = 1;
            $messages = [
                'Zostałeś poprawnie zalogowany!',
            ];
            $_SESSION['messages'] = $messages;
            
           
        }
    }
}

header('Location: http://localhost');
exit;


