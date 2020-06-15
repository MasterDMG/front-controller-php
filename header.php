<DOCTYPE HTML>
<html>
    <head>
        <title>Moja Stronka</title>
        <link rel="stylesheet" href="/css/styles.css">  
    </head>
    <body>
    <div class="container mx-auto bg-teal-500">
        <div class="grid grid-rows-4 grid-flow-col gap-4">
            <div id="menu" class="bg-teal-800 row-span-4 p-10">
                <a href='/'>STRONA GŁÓWNA</a><br>
                <a href='/kontakt'>KONTAKT</a><br>
                <a href='/formularze'>FORMULARZE</a><br>
                <a href='/artykuly'>ARTYKUŁY</a><br>
                <a href='/rejestracja'>ZAREJESTRUJ</a><br>
                <?php
                    echo'<a href="/sprawdz">DODAJ ARTYKUL</a><br>';
                    if(!isset($_SESSION['user'])) {
                        echo"<a href='/zaloguj'>ZALOGUJ</a><br>";
                    } else {
                        echo"<a href='/wyloguj'>WYLOGUJ</a><br>";
                    }
                ?>
            </div>
            <div id="main" class="bg-teal-700 row-span-1 col-span-3 p-10">
                    <h5>NAGŁÓWEK</h5>
            </div>
            <div id="content" class="bg-teal-600 row-span-2 col-span-3 p-10">
<?php

if (isset($_SESSION['messages'])) {
    echo '<div class="messages">';
    foreach ($_SESSION['messages'] as $message) {
        echo $message . '<br/>';
    }
    echo '</div>';

    unset($_SESSION['messages']);
}