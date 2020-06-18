<?php

if($_POST){
    if (isset($_SESSION['user'])) {
        MessageBag::addMessage('Jesteś aktualnie zalogowany!', MessageBag::INFO);
        
        header('Location: http://localhost'); 
        exit;
    }

    $users = @fopen('../data/users.csv','r');

    if ($users === false) {
        MessageBag::addMessage('Błąd odczytu pliku!');

        header('Location: http://localhost');
        exit;
    }

    while(!feof($users)){
        $line = fgets($users);
        $lineData = explode(',', $line);
        
        $username = \trim($lineData[0]);
        $password = \trim($lineData[1]);

        if ($_POST['login'] === $username && md5($_POST['pass']) === $password) {
            $userData = [
                'name' => $username,
            ];
            $_SESSION['user'] = $userData;
            
            MessageBag::addMessage('Zostałeś poprawnie zalogowany!', MessageBag::SUCCESS);
        }
    }
}

header('Location: http://localhost');
exit;


