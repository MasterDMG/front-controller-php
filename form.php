<?php

$file = $_SERVER['REQUEST_URI'] . '.txt';
$content = file_get_contents('forms/.'.$file);
$i=0;
while($content[$i]!='<'){
    $title.=$content[$i];
    $i++;
    
}
$content=\substr($content, $i+4);


echo '<h1>'.$title.'</h1>';

echo $content;
