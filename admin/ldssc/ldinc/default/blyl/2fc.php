<?php
$lastNo=$this->getGameLastNo(31);

header('Content-type: application/xml');
echo'<?xml version="1.0" encoding="utf-8"?>';
echo '<xml><row expect="'.$lastNo['actionNo'].'" opencode="'.randKeys().'" opentime="'.$lastNo['actionTime'].'"/></xml>';


/* 生成随机数 */
function randKeys($len=5){
	$str='0123456789';
	$rand='';
	for($x=0;$x<$len;$x++){
		$rand.=($rand!=''?',':'').substr($str,rand(0,strlen($str)-1),1);
	}
	return $rand;
}
?>