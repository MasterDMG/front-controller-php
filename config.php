<?php

require_once('autoload.php');

$url = [
    '/' => 'home.php',
    '/contact' => 'contact.php',
    '/wyslij-formularz' => 'contact_form.php',
    '/forms' => 'forms.php',
    '/articles' => 'articles.php',
    '/sign-in' => 'login-form.php',
    '/login' => 'login.php',
    '/sign-up' => 'register-form.php',
    '/zarejestruj' => 'register.php',
    '/dodaj-artykuly' => 'add-article.php',
    '/dodaj-artykul' => 'article-form.php',
    '/wyloguj' => 'logout.php',
    '/checklog' => 'checklog.php'
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

