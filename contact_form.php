<?php

if($_POST){
    $fileName = \sprintf(
        'forms/%s-%s.txt',
        \date('Y-m-d-H-i-s'),
        \substr(\md5($_POST["title"]), 0, 8)
    );
    $form_content=$_POST['title'].'<br>'.$_POST['content'];
    
    \file_put_contents($fileName, $form_content);
   
}

header('Location: http://localhost/kontakt');

exit;