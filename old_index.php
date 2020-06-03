<?php
switch ($_SERVER['REQUEST_URI']) {
    case '/':
        require_once('home.php');
        break;
    
    case '/kontakt':
        require_once('contact.php');
        break;    

    case '/wyslij-formularz':
        require_once('contact_form.php');
        break;

    default:
        require_once('404.php');
        break;
    }
