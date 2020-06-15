<?php

$url = [
    '/' => 'home.php',
    '/kontakt' => 'contact.php',
    '/wyslij-formularz' => 'contact_form.php',
    '/formularze' => 'forms.php',
    '/artykuly' => 'articles.php',
    '/zaloguj' => 'login-form.php',
    '/logowanie' => 'login.php',
    '/rejestracja' => 'register-form.php',
    '/zarejestruj' => 'register.php',
    '/dodaj-artykuly' => 'add-article.php',
    '/dodaj-artykul' => 'article-form.php',
    '/wyloguj' => 'logout.php',
    '/sprawdz' => 'checklog.php'
];

require_once('functions.php');
dynamic_routing('forms');

$catalog2 = 'articles/.';
$files2 = scandir($catalog2);

foreach($files2 as $file2){
    $pathInfoArticle = pathinfo($file2);
    if ($pathInfoArticle['extension'] === 'txt') {
        $route2 = '/' . \substr($file2, 0, -4);
        $url[$route2] = 'article.php';
    }
}

