<?php
require_once 'jsonRPCClient.php';

$url = 'http://192.168.10.62/study/server.php';//服务端地址
$myExample = new jsonRPCClient($url,false);

//客户端调用
try{
    $name = $myExample->getName();
    echo $name;
}catch(Exception $e){
    echo  nl2br($e->getMessage()).'<br/>'."\n";
}
?>