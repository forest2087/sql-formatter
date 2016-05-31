SqlFormatter Laravel Service Provider
=============

jdorn/sql-formatter wrapped with laravel service provider for laravel 5.1


Usage
-----------

Add VCS repo to composer.json 

	  "repositories": [
        {
          "type": "vcs",
          "url": "git@github.com:forest2087/sql-formatter.git"
        }
      ]

Add the following to config\app.php
	
	//service provider
	FW\SqlFormatter\SqlFormatterServiceProvider::class
	
	//alias
	'SF' => FW\SqlFormatter\SqlFormatter::class

In code

	Use SF;
