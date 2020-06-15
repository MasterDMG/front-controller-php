<?php 
if($_POST){
    if($_POST['article-title']==""){
        $target_dir = "articles/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);  
        
    }else{
    
    
        function check($title){
            $catalog2 = 'articles/.';
            $files2 = scandir($catalog2);
            foreach($files2 as $file2){
                if($title==substr($file2, 0, -4)){
                    return true;
                };
            }
            return false;
        }
    
        if(check($_POST['article-title'])==false){
        $articleName = \sprintf(
            'articles/%s.txt',
            $_POST["article-title"]
        );
        $article_content=$_POST['article-title'].'<br>'.$_POST['article-content'];
        
        \file_put_contents($articleName, $article_content);
        }  
    } 
}
header('Location: http://localhost/dodaj-artykul'); 

exit;