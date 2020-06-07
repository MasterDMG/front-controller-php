<?php

$url = [
    '/' => 'home.php',
    '/kontakt' => 'contact.php',
    '/wyslij-formularz' => 'contact_form.php',
    '/formularze' => 'forms.php',
    '/artykuly' => 'articles.php'
];

$catalog = 'forms/.';
$files = scandir($catalog);

foreach($files as $file){
    if(strlen($file)>16) {
        $route = '/' . \substr($file, 0, -4);
        $url[$route] = 'form.php'; 
    }
}

$catalog2 = 'articles/.';
$files2 = scandir($catalog2);

foreach($files2 as $file2){
        $route2 = '/' . \substr($file2, 0, -4);
        $url[$route2] = 'article.php'; 
}

