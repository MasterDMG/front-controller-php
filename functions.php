<?php
function dynamic_routing($place){
    $catalog = $place.'/.';
    $files = scandir($catalog);
    foreach($files as $file){
        $pathInfoForm = pathinfo($file);
        if ($pathInfoForm['extension'] === 'txt') {
            $route = '/' . \substr($file, 0, -4);
            $url[$route] = 'form.php'; 
        }
    }
}
function add_article(){
    
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
function add_contact(){
    $fileName = \sprintf(
        'forms/%s-%s.txt',
        \date('Y-m-d-H-i-s'),
        \substr(\md5($_POST["title"]), 0, 8)
    );
    $form_content=$_POST['title'].'<br>'.$_POST['content'];
        
    \file_put_contents($fileName, $form_content);
}

function display($place){
    $catalog = $place.'/.';
    $files = scandir($catalog);

    echo"<ol>";
    foreach($files as $file){
        $pathInfoArticle = pathinfo($file);
        if ($pathInfoArticle['extension'] === 'txt'){
            echo '<li><a href="'.\substr($file, 0, -4).'">'.$file.'</a></li>';
        }
    }
    echo"</ol>";
}

