<?php

class Router
{
    public static function dynamicRouting($place, $handler)
    {
        $urls = [];
        $catalog = $place.'s/.';
        $files = scandir($catalog);

        foreach($files as $file){
            $pathInfoForm = pathinfo($file);
            if ($pathInfoForm['extension'] === 'txt') {
                $route = '/' . \substr($file, 0, -4);
                $urls[$route] = $handler . '.php';
            }
        }

        return $urls;
    }
}