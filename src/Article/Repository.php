<?php

namespace Article;

class Repository
{
    public static function addArticle(){
        
        if($_POST['article-title'] == "") {
            $target_dir = "../articles/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);  

            return true;
        } else {
            if(check($_POST['article-title'])==false){
            $articleName = \sprintf(
                'data/articles/%s.txt',
                $_POST["article-title"]
            );
            $article_content=$_POST['article-title'].'<br>'.$_POST['article-content'];
            
            \file_put_contents($articleName, $article_content);

            return true;
            }
        }

        return false;
    }

    
}