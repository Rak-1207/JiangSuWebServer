<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'ht111tp://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Loca111tion: '.$uri.'/dashboard/');
	exit;
?>
Something is wrong with the XAMPP installation :-( aaasas
