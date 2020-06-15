<?php
$catalog = 'forms/.';
$files = scandir($catalog);

echo"<ol>";
foreach($files as $file){
    $pathInfoArticle = pathinfo($file);
    if ($pathInfoArticle['extension'] === 'txt'){
        echo '<li><a href="'.\substr($file, 0, -4).'">'.$file.'</a></li>';
    }
}
echo"</ol>";