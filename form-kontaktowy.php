<form name="Kontakt" method="POST" >
		Tytul :<input type="text" name="im" ><br>
		Treść :<textarea name="in"></textarea><br>
		
		<input type="submit">
	</form>
<?php

if($_POST){
    $nazwa=$_POST['im'];
    $data=date("Y-m-d");
    $czas=date("H-i-s");
    $file=fopen("formularze/$data-$czas-$nazwa.txt","w");
    fputs($file, $_POST["in"]);
    fclose($file);
}





/**
 * Utwórz formularz kontaktowy na stronie localhost/kontakt który zostanie wysłany na skrypt wyslij-formularz.php który spowoduje zapisanie treści formularza 
 * do pliku w katalogu formularze/ o formacie YYYY-mm-dd-HH-ii-ss-temat-formularza.txt
 * Formularz powinien zawierać takie pola jak temat oraz treść, oraz przycisk wyslij który spowoduje wysyłkę formularza
 */