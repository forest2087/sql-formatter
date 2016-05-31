SqlFormatter Laravel Service Provider
=============

jdorn/sql-formatter wrapped with laravel service provider for laravel 5.1


Usage
-----------

Add the following to config\app.php

	//service provider
	FW\SqlFormatter\SqlFormatterServiceProvider::class
	
	//alias
	'SF' => FW\SqlFormatter\SqlFormatter::class

In code

	Use SF;
