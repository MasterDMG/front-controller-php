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

if (MessageBag::hasMessages()) {
    echo '<div class="messages">';
    foreach (MessageBag::getMessages() as $message) {
        require('message.php');
    }
    echo '</div>';

    
}