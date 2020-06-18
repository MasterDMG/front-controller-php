<?php

class Render
{
    public static function showContent($place)
    {
        $file = $_SERVER['REQUEST_URI'] . '.txt';
        $content = file_get_contents($place . $file);

        return $content;
    }
}
