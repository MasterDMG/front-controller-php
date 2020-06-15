<?php 
$menu=fopen('menu.csv','r');
$tab= array();
while(!feof($users)){
    $line = fgets($users);
    $tab=(explode(",",$line));
echo"
    <a href='/'>STRONA GŁÓWNA</a><br>
    <a href='/kontakt'>KONTAKT</a><br>
    <a href='/formularze'>FORMULARZE</a><br>
    <a href='/artykuly'>ARTYKUŁY</a><br>
    <a href='/rejestracja'>ZAREJESTRUJ</a><br>
    "
    echo'<a href="/sprawdz">DODAJ ARTYKUL</a><br>';
    echo'<a href="/sprawdz">ZMIEN MENU</a><br>';
    if(!isset($_SESSION['user'])) {
        echo"<a href='/zaloguj'>ZALOGUJ</a><br>";
    } else {
        echo"<a href='/wyloguj'>WYLOGUJ</a><br>";
    }
