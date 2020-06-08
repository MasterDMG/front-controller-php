<?php
$catalog2 = 'articles/.';
$files2 = scandir($catalog2);

echo"<ol>";
foreach($files2 as $file2){
    if(strpos($file2, ".txt")==true){
        echo '<li><a href="'.\substr($file2, 0, -4).'">'.$file2.'</a></li>';
    
    }
}
echo"</ol>";