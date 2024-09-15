<?php
function is_developer() {
	return $_SERVER["SERVER_NAME"] == "notabenoid.rts";
}

function prr($obj, $title = '') {
	echo "\n<pre>" . ($title != '' ? "<b>{$title}</b>\n" : "") . htmlspecialchars(print_r($obj, true)) . "</pre>\n";
}

 // server {
 // 	server_name notabenoid.com;
 // 	listen 80;
 // 	root /srv/notabenoid.com/www;
 // 	index index.php;
 // 	location / {
 // 		try_files $uri $uri/ /index.php?$args;
 // 	}
 // 	location ~ \.php$ {
 // 		fastcgi_split_path_info ^(.+\.php)(/.+)$;
 // 		fastcgi_pass unix:/var/run/php5-fpm.sock;
 // 		fastcgi_index index.php;
 // 		include fastcgi_params;
 // 	}
 // 	location ~ ^/(assets|img|js|css) {
 // 		try_files $uri =404;
 // 	}
 // }

function p() {
	return Yii::app()->params;
}

$yii = dirname(__FILE__).'/../yii/framework/yii.php';
$config = dirname(__FILE__) . '/../protected/config/' . (is_developer() ? "dev.php" : "main.php");

if(is_developer()) {
	defined('YII_DEBUG') or define('YII_DEBUG', true);
	defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
}

require_once($yii);
Yii::createWebApplication($config)->run();
