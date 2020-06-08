<?php 
if($_POST){
    $articleName = \sprintf(
        'articles/%s.txt',
        $_POST["article-title"]
    );
    $article_content=$_POST['article-title'].'<br>'.$_POST['article-content'];
    
    \file_put_contents($articleName, $article_content);
      
}
header('Location: http://localhost/dodaj-artykul'); 

exit;