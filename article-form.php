<form name="Kontakt" method="POST" action="http://localhost/dodaj-artykul" enctype="multipart/form-data" class="form w-2/4 mx-auto">
    <label for="title" class="form-label">Title:</label>
    <input type="text" name="article-title" class="form-input"><br>
    <label for="title" class="form-label">Content:</label>
    <textarea name="article-content" rows="10" cols="50" class="form-input"></textarea><br>
    <label for="title" class="form-label">Add Own File:</label>
    <input type="file" name="fileToUpload" id="fileToUpload" class="form-input"><br>
    <input type="submit" class='button btn-blue'>
</form>

<?php

use Article\Repository;

if($_POST){
    
    if(Validator::check($_POST['title'])==true){
       
        
       
        Repository::addArticle();
        echo "Wysłano";

    } else {
        echo' błąd wysyłania';
    }

   
}
