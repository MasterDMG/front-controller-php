<?php

/**
 * Zamiast tytułu użyj algorytmu hashującego (np md5) aby ostatni czlon nazwy pliku był 8 cyfrowym hashem
 */

if($_POST){
    
    
function encrypt($k, &$title ){
	$length=strlen($title); 
	if($k >= 0)
		for($i=0;$i<$length;$i++){
			$x=ord($title[$i]);
		    if($x+$k<=ord('Z')){
				$x+=$k;
				$title[$i]=chr($x);
			}
			else {
				$x=$x+$k-26;
				$title[$i]=chr($x);
			}
		}
$fileName = \sprintf(
    'forms/%s-%s.txt',
    \date('Y-m-d-H-i-s'),
    encrypt(10, $_POST["title"])
);
    \file_put_contents($fileName, $_POST['content']);
}

header('Location: http://localhost/kontakt');
exit;