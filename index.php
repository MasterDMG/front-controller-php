<?php 

require_once('config.php');
if ($_SERVER['REQUEST_URI'] !== '/wyslij-formularz') {
    require_once('header.php');
}

if (\array_key_exists($_SERVER['REQUEST_URI'], $url)) {
    require_once($url[$_SERVER['REQUEST_URI']]);
} else {
    require_once('404.php');
}

require_once('footer.php');

exit;