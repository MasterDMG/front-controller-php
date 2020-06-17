<!DOCTYPE html>
<html lang="en" class="h-full">
    <head>
        <title>Moja Stronka</title>
        <link rel="stylesheet" href="/css/styles.css">  
    </head>
    <body class='flex flex-col h-full'>
    <?php require_once('menu.php'); ?>

    <div id='content' class='flex-1 mx-0 min-w-full'>
        <div class="container mx-auto py-10">
<?php

if (isset($_SESSION['messages'])) {
    echo '<div class="messages">';
    foreach ($_SESSION['messages'] as $message) {
        echo $message . '<br/>';
    }
    echo '</div>';

    unset($_SESSION['messages']);
}