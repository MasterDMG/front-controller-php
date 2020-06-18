<?php

class Validator
{
    public static function check(string $title): bool
    {
        if(!isset($_FILES["fileToUpload"])
        && $_POST['title'] == '' 
        && $_POST['content' == '']) {
            return true;
        } else {
        $catalog = '../articles/.';
        $files = scandir($catalog);

        foreach($files as $file){
            if ($title==substr($file, 0, -4)) {
                return true;
            };
        }
        }

        return false;
    }
}