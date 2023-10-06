<!-- 
<?php

// Database configurations 

//define("HOST", "localhost");
//define("USER", "root");
//define("DATABASE", "mis-inventory");
//define("PASSWORD", "");

// Base URL

//define("BASEURL", "http://localhost/MVCFramework");

?> -->


<?php 

if($_SERVER['SERVER_NAME'] == 'localhost')
{
	/** database config **/
	define('DBNAME', 'mis-inventory');
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBDRIVER', '');
	
	define('SITE_URL', 'http://localhost/mis-test/public');

}else
{
	/** database config **/
	define('DBNAME', 'my_db');
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBDRIVER', '');

	define('ROOT', 'https://www.yourwebsite.com');

}

define('APP_NAME', "My Website");
define('APP_DESC', "Best website on the planet");

/** true means show errors **/
define('DEBUG', true);
