<?php

function setcache($cacheid, $text){
	try {
		$redis = new Redis();
		$redis->connect('144.202.24.184', 6379);
		$redis->set($cacheid, $text);
	}catch(Exception $e){
	}
}


function getcache($cacheid){
	try {
		$redis = new Redis();
		$redis->connect('144.202.24.184', 6379);
		$text = $redis->get($cacheid);
		if(!empty($text)){
			return $text;
		}
		return '';
	}catch(Exception $e){
		return '';
	}
}

?>
