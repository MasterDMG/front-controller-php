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
    $plik=fopen('users.csv','r');
    $tab= array();
    while(!feof($plik)){
        $linia = fgets($plik);
        $tab=(explode(",",$linia));
        
        $login=$tab[0];
        $pass=$tab[1];
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


