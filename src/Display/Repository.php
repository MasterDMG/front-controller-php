<?php

namespace Display;

class Repository
{

    public static function returnFilesList($place) {
        $catalog = $place.'/.';
        $files = scandir($catalog);
    
        $result = '<ul class="list-inside bg-gray-200 ...">';
        foreach($files as $file){
            $pathInfoArticle = pathinfo($file);
    
            if ($pathInfoArticle['extension'] === 'txt') {
                $result .= '<li><a href="'.\substr($file, 0, -4).'">'.$file.'</a></li>';
            }
        }
        $result .= '</ul>';
    
        return $result;
    }
}