<DOCTYPE HTML>
<html>
    <head>
        <title>Moja Stronka</title>
        <link rel="stylesheet" href="/style.css">  
    </head>
    <body>
    <div id="main">
            <h5>NAGŁÓWEK</h5>
    </div>
    <div id="menu">
        <a href='/'>STRONA GŁÓWNA</a><br>
        <a href='/kontakt'>KONTAKT</a><br>
        <a href='/formularze'>FORMULARZE</a><br>
        <a href='/artykuly'>ARTYKUŁY</a><br>
        <a href='/dodaj-artykul'>DODAJ ARTYKUL</a><br>
        <?php 
            if($GLOBALS['log']==false)echo"<a href='/zaloguj'>ZALOGUJ</a><br>";
            else echo"WYLOGUJ"
        ?>
    </div>
    <div id="content">
<?php

if (isset($_SESSION['messages'])) {
    echo '<div class="messages">';
    foreach ($_SESSION['messages'] as $message) {
        echo $message . '<br/>';
    }
    echo '</div>';

    unset($_SESSION['messages']);
}