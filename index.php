<?php 
$URL = array('/' =>'home.php',
'/kontakt' =>'contact.php',
'/wyslij-formularz' =>'contact-form.php'
);
require_once($URL[$_SERVER['REQUEST_URI']]);