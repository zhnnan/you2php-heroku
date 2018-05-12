<?php

$redis = new Redis();
$redis->connect('144.202.24.184', 6379);


function setcache($cacheid, $text){
	global $redis;
	$redis->set($cacheid, $text);
}


function getcache($cacheid){
	global $redis;
	$text = $redis->get($cacheid);
	if(!empty($text)){
		return $text;
	}
	return '';
}

?>
