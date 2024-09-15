<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Notabenoid.org',
	"language" => "ru",
	"sourceLanguage" => "en",

	"import"=>array(
		"application.models.*",
		"application.components.*",
		"ext.yii-mail.YiiMailMessage",
	),

	'components'=>array(
		"db" => array(
			"connectionString" => "pgsql:host=localhost;dbname=notabenoid",
			"username" => "notabenoid",
			"password" => "winhafus?",
			"charset" => "utf8",

			"emulatePrepare" => true,
			"schemaCachingDuration" => 60 * 30,
			"enableProfiling" => true,
		),
		"mail" => array(
			"class" => "ext.yii-mail.YiiMail",
			"transportType" => "php",
			"viewPath" => "application.views.email",
			"logging" => false,
			"dryRun" => false,
		),
		"langs" => array(
			"class" => "application.components.Langs",
		),
		"parser" => array(
			"class" => "application.components.Parser",
		),
	),

	'params' => [
		'domain' => 'notabenoid.org',
		'adminEmail' => 'konstantin.pirs@notabenoid.org',
		"commentEmail" => "konstantin.pirs@notabenoid.org",
		"systemEmail" => "konsatntin.pirs@notabenoid.org",
	],
);
