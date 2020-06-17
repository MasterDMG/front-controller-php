<?php

require_once('functions.php');

$url = [
    '/' => 'home.php',
    '/contact' => 'contact.php',
    '/wyslij-formularz' => 'contact_form.php',
    '/forms' => 'forms.php',
    '/articles' => 'articles.php',
    '/zaloguj' => 'login-form.php',
    '/logowanie' => 'login.php',
    '/sign-up' => 'register-form.php',
    '/zarejestruj' => 'register.php',
    '/dodaj-artykuly' => 'add-article.php',
    '/dodaj-artykul' => 'article-form.php',
    '/wyloguj' => 'logout.php',
    '/sprawdz' => 'checklog.php'
];

$catalog2 = '../data/articles/.';
$files2 = scandir($catalog2);

foreach($files2 as $file2){
    $pathInfoArticle = pathinfo($file2);
    if ($pathInfoArticle['extension'] === 'txt') {
        $route2 = '/' . \substr($file2, 0, -4);
        $url[$route2] = 'article.php';
    }
}

