<?php 

session_start();

require_once('../config.php');

if (
    $_SERVER['REQUEST_URI'] !== '/wyslij-formularz' 
    && $_SERVER['REQUEST_URI'] !== '/dodaj-artykuly'
    && $_SERVER['REQUEST_URI'] !== '/login'
    && $_SERVER['REQUEST_URI'] !== '/wyloguj'
    && $_SERVER['REQUEST_URI'] !== '/sprawdz'
    && $_SERVER['REQUEST_URI'] !== '/zarejestruj'
    ) {

    require_once('../header.php');
}

$url = \array_merge($url, Router::dynamicRouting('../data/form', 'form'));
$url = \array_merge($url, Router::dynamicRouting('../data/article', 'article'));

if (\array_key_exists($_SERVER['REQUEST_URI'], $url)) {
    require_once('../' . $url[$_SERVER['REQUEST_URI']]);
} else {
    require_once('../404.php');
}

require_once('../footer.php');

exit;
