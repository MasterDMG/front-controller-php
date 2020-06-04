<?php

if($_POST){
    $fileName = \sprintf(
        'forms/%s-%s.txt',
        \date('Y-m-d-H-i-s'),
        \substr(\md5($_POST["title"]), 0, 8)
    );

    \file_put_contents($fileName, $_POST['content']);
}

header('Location: http://localhost/kontakt');
exit;