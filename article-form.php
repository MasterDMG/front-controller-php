<form name="Kontakt" method="POST" action="http://localhost/dodaj-artykul" enctype="multipart/form-data">
    Tytul :<input type="text" name="article-title" ><br>
    Treść :<textarea name="article-content"></textarea><br>
    Dodaj własny plik:<input type="file" name="fileToUpload" id="fileToUpload"><br>
    <input type="submit">
</form>
<?php
if($_POST){
    require('functions.php');
    add_article();
    echo "Wysłano";
}
