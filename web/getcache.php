<?php
include('cache.php');

$cacheid = $_GET['key'];

$data = getcache($cacheid);

if(!empty($data)){
	echo $data;
}else{
	echo 'not exist';
}

?>
