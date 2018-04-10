<?php
/**
 * author: NickBai
 * createTime: 2016/12/9 0009 下午 4:19
 */
if (version_compare(phpversion(), "5.4.0", "lt")) {
    exit('php version must greater than 5.4.0');
}
ob_implicit_flush();
//require_once('ThinkPHP/Library/Vendor/ServerSocketSocketChat.php');
require_once('ThinkPHP/Library/Vendor/ServerSocket/SocketChat.php');


//run server
$port = 8083;
new NickBai\SocketChat( $port );
