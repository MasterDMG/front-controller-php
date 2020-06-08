<?php
$catalog = 'forms/.';
$files = scandir($catalog);

echo"<ol>";
foreach($files as $file){
    if(strpos($file, ".txt")==true){
        echo '<li><a href="'.\substr($file, 0, -4).'">'.$file.'</a></li>';
    }
}
echo"</ol>";