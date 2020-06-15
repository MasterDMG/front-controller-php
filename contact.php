<form name="Kontakt" method="POST" action="http://localhost/kontakt">
    Tytul :<input type="text" name="title" required><br>
    Treść :<textarea name="content"></textarea><br>
    
    <input type="submit">
</form>

<?php 
if($_POST){
    require('functions.php');
    add_contact();
    echo "Wysłano";
}


