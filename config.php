<?php

$url = [
    '/' => 'home.php',
    '/kontakt' => 'contact.php',
    '/wyslij-formularz' => 'contact_form.php',
    '/lorem' => 'articles/lorem.txt',
    '/ipsum' => 'articles/ipsum.txt',
    '/dolor' => 'articles/dolor.txt',
    '/formularze' => 'forms.php',
];

$catalog = 'forms/.';
$files = scandir($catalog);

foreach($files as $file){
    if(strlen($file)>16) {
        $route = '/' . \substr($file, 0, -4);
        $url[$route] = 'form.php'; 
    }
}

