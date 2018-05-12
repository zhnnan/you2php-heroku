<?php
include('cache.php');

$cacheid = $_GET['key'];

$data = getcache($cacheid);

if(!empty($data)){
	echo json_encode($data);
}else{
	echo 'not exist';
}

?>
