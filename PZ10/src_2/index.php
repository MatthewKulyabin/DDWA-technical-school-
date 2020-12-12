<?php 
	$page = page_title('https://www.php.net/manual/ru/function.preg-replace.php');
	preg_match_all( "|<title>(.*)</title>|sUSi", $page['content'], $titles);
	echo $titles[1][0]; 
	function page_title( $url ) { 
		$res = array(); 
		$options = array( 
		CURLOPT_RETURNTRANSFER => true, 
		CURLOPT_HEADER => false, 
		CURLOPT_FOLLOWLOCATION => true, 
		CURLOPT_AUTOREFERER => true, 
		CURLOPT_CONNECTTIMEOUT => 10
	);
		$ch = curl_init( $url ); 
		curl_setopt_array( $ch, $options ); 
		$content = curl_exec( $ch ); 
		curl_close( $ch ); 
		$res['content'] = $content; 
		return $res; 
	} 
?>