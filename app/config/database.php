<?php
if(isset($_SERVER['SERVER_SOFTWARE']) && strpos($_SERVER['SERVER_SOFTWARE'],'Google App Engine') !== false) {
  $mysql_array = array(
        'driver'    => 'mysql',
        'unix_socket' => getenv('PRODUCTION_CLOUD_SQL_INSTANCE'),
        'host'      => '',
        'database'  => getenv('PRODUCTION_DB_NAME'),
        'username'  => getenv('PRODUCTION_DB_USERNAME'),
        'password'  => getenv('PRODUCTION_DB_PASSWORD'),
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix'    => '',
    );
} else {
  $mysql_array = array(
        'driver'    => 'mysql',
        'host'      => getenv('DEVELOPMENT_DB_HOST'),
        'database'  => getenv('DEVELOPMENT_DB_NAME'),
        'username'  => getenv('DEVELOPMENT_DB_USERNAME'),
        'password'  => getenv('DEVELOPMENT_DB_PASSWORD'),
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix'    => '',
    );
}

return array(

	'fetch' => PDO::FETCH_CLASS,

	'default' => 'mysql',
	

	'connections' => array(

		'sqlite' => array(
			'driver'   => 'sqlite',
			'database' => __DIR__.'/../database/production.sqlite',
			'prefix'   => '',
		),

		'mysql' => $mysql_array,

		'pgsql' => array(
			'driver'   => 'pgsql',
			'host'     => 'localhost',
			'database' => 'forge',
			'username' => 'forge',
			'password' => '',
			'charset'  => 'utf8',
			'prefix'   => '',
			'schema'   => 'public',
		),

		'sqlsrv' => array(
			'driver'   => 'sqlsrv',
			'host'     => 'localhost',
			'database' => 'database',
			'username' => 'root',
			'password' => '',
			'prefix'   => '',
		),

	),

	'migrations' => 'migrations',

	'redis' => array(

		'cluster' => false,

		'default' => array(
			'host'     => '127.0.0.1',
			'port'     => 6379,
			'database' => 0,
		),

	),

);
