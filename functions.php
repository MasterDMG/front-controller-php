<?php

class Router
{
    public static function dynamicRouting($place, $handler)
    {
        $urls = [];
        $catalog = $place.'s/.';
        $files = scandir($catalog);

        foreach($files as $file){
            $pathInfoForm = pathinfo($file);
            if ($pathInfoForm['extension'] === 'txt') {
                $route = '/' . \substr($file, 0, -4);
                $urls[$route] = $handler . '.php'; 
            }
        }

        return $urls;
    }
}

function check($title) {
    if(!isset($_FILES["fileToUpload"]) 
    && $_POST['title'] == '' 
    && $_POST['content' == '']) {
        return true;
    } else {
    $catalog = '../articles/.';
    $files = scandir($catalog);

    foreach($files as $file){
        if ($title==substr($file, 0, -4)) {
            return true;
        };
    }
    }

    return false;
}

function addArticle(){
    
    if($_POST['article-title'] == "") {
        $target_dir = "../articles/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);  

        return true;
    } else {
        if(check($_POST['article-title'])==false){
        $articleName = \sprintf(
            'articles/%s.txt',
            $_POST["article-title"]
        );
        $article_content=$_POST['article-title'].'<br>'.$_POST['article-content'];
        
        \file_put_contents($articleName, $article_content);

        return true;
        }
    }

    return false;
}

function addContact(){
    $fileName = \sprintf(
        'forms/%s-%s.txt',
        \date('Y-m-d-H-i-s'),
        \substr(\md5($_POST["title"]), 0, 8)
    );

    $form_content=$_POST['title'].'<br>'.$_POST['content'];
        
    \file_put_contents($fileName, $form_content);
}

function returnFilesList($place) {
    $catalog = $place.'/.';
    $files = scandir($catalog);

    $result = '<ol>';
    foreach($files as $file){
        $pathInfoArticle = pathinfo($file);

        if ($pathInfoArticle['extension'] === 'txt') {
            $result .= '<li><a href="'.\substr($file, 0, -4).'">'.$file.'</a></li>';
        }
    }
    $result .= '</ol>';

    return $result;
}

class Render
{
    public static function showContent($place)
    {
        $file = $_SERVER['REQUEST_URI'] . '.txt';
        $content = file_get_contents($place . $file);

        return $content;
    }
}
