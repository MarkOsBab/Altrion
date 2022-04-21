<?php 

function doToken($longitud) {
	if ($longitud < 4) {
		$longitud = 4;
	}
	return bin2hex(openssl_random_pseudo_bytes(($longitud - ($longitud % 2)) / 2));
}

?>