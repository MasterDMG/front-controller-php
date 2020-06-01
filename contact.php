<?php

/**
 * Utwórz formularz kontaktowy na stronie localhost/kontakt który zostanie wysłany na skrypt wyslij-formularz.php który spowoduje zapisanie treści formularza 
 * do pliku w katalogu formularze/ o formacie YYYY-mm-dd-HH-ii-ss-temat-formularza.txt
 * Formularz powinien zawierać takie pola jak temat oraz treść, oraz przycisk wyslij który spowoduje wysyłkę formularza
 */

echo 
'



<form name="Kontakt" method="POST" action="http://localhost/wyslij-formularz">
    Tytul :<input type="text" name="title" required><br>
    Treść :<textarea name="content"></textarea><br>
    
    <input type="submit">
</form>';

