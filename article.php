<?php

$file2 = $_SERVER['REQUEST_URI'] . '.txt';
$content2 = file_get_contents('articles/.'.$file2);
echo $content2;