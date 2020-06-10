<?php



if($_POST){
    include_once('config.php');
    if (isset($_SESSION['user'])) {
        $messages = [
            'Jesteś aktualnie zalogowany!',
        ];
        $_SESSION['messages'] = $messages;
        
        header('Location: http://localhost'); 
        exit;
    }

    if ($users[$_POST['login']]==md5($_POST['pass'])) {
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

header('Location: http://localhost'); 
exit;
