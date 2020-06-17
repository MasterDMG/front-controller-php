<form name="Kontakt" method="POST" action="http://localhost/contact" class="form w-2/4 mx-auto">
    <label for="title" class="form-label">Title:</label>
    <input type="text" name="title" class="form-input" required>
    <label for="content"  class="form-label">Content:</label>
    <textarea name="content" rows="10" cols="50" class="form-input"></textarea><br>
    <button class="button btn-blue" type="button">Wyślij</button>
</form>

<?php 
if($_POST){
    addContact();
    echo "Wysłano";
}


