<?php
    if(isset($_SESSION['user'])){
        header('Location: http://localhost/dodaj-artykul');
        exit;
    }
    else {
        header('Location: http://localhost/zaloguj');
        exit;
    }