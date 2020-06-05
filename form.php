<?php

$file = $_SERVER['REQUEST_URI'] . '.txt';
$content = file_get_contents('forms/.'.$file);

$title = '';
echo '<h1>'.$title.'</h1>';

echo $content;
