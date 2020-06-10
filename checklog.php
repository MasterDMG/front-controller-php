<?php
    if(isset($_SESSION['user']))header('Location: http://localhost/dodaj-artykul');
        else header('Location: http://localhost/zaloguj');