<?php
switch ($_SERVER['REQUEST_URI']) {
    case '/':
        require_once('strona-glowna.php');
        break;
    
    case '/kontakt':
        require_once('kontakt.php');
        break;    

    case '/wyslij-formularz':
        require_once('form-kontaktowy.php');
        break;

    default:
        require_once('404.php');
        break;
    }
