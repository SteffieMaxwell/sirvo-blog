<?php
if( gethostname() != "sirvoproduction")
{
	$creds = [
		'default' => 'mysql',
		'prefix' => 'anchor_',
		'connections' => [
			'mysql' => [
				'driver' => 'mysql',
				'hostname' => '127.0.0.1',
				'port' => 3306,
				'username' => 'root',
				'password' => 'local',
				'database' => 'blog',
				'charset' => 'utf8'
			]
		]
	];
}else{
	$creds = [
		'default' => 'mysql',
		'prefix' => 'anchor_',
		'connections' => [
			'mysql' => [
				'driver' => 'mysql',
				'hostname' => '127.0.0.1',
				'port' => 3306,
				'username' => 'root',
				'password' => 'gosirvo!',
				'database' => 'blog',
				'charset' => 'utf8'
			]
		]
	];		
}
return $creds;