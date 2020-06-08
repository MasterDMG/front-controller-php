<?php
if($_POST){
    global $log=false;
    $login=$_POST['login'].'-'.$_POST['pass'];
    $user_catalog = 'USER_DATA/.';
    $users = scandir($user_catalog);
    
    foreach($users as $user){
        
            $user_data =\substr($user, 0, -4);
            if($user_data==$login){
                $log=true;
                echo'Zalogowano';
                die;
            }
        
    }
    echo'blędne dane';
    
    
}