<?php
define('ROOT_PART', Root_part());
define('APIKEY', getenv("APIKEY")); //这里改成您的api key
define('GJ_CODE', 'TW');//国家代码
define('SITE_NAME', 'Youtube代理');//网站名字
define('TITLENAME', 'Youtube代理');//网站名字
define('EN2DEKEY', 'gfw-breaker');//一个随机字符串，加解密KEY
define('EMAIL', 'lixiaoming0909@gmail.com');//邮箱
define('PLAYLIST_ID', getenv("PLAYLIST_ID"));//推荐内容播放列表
define('REDIS_SERVER', getenv("REDIS_SERVER"));//Redis 服务器IP
define('NGINX_SERVER', getenv("NGINX_SERVER"));//Nginx 反向代理地址URL，用于代理图片 
define('WEB_PROXY', getenv("WEB_PROXY")); // Node Unblocker代理地址 

$stream_url = getenv("STREAM_URL");
if(empty($stream_url)){
	$stream_url = "./vs.php";
}
define('STREAM_URL', $stream_url); // 视频流代理地址URL

$home_page = getenv("HOME_PAGE");
if(empty($home_page)){
	$home_page = "./";
}
define('HOME_PAGE', $home_page); // 

?>
