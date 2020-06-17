<form name="Kontakt" method="POST" action="http://localhost/kontakt" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    Tytul :<input type="text" name="title" required><br>
    Treść :<textarea name="content"></textarea><br>
    
    <!-- <input type="submit" class="btn btn-blue"> -->
    <button class="btn btn-blue" type="button">Wyślij</button>
</form>

<?php 
if($_POST){
    addContact();
    echo "Wysłano";
}


