<?php
$catalog = 'forms/.';
$files = scandir($catalog);
echo"<ol>";
foreach($files as $file) if(strlen($file)>16)echo '<li>'.$file.'</li>';
echo"</ol>";