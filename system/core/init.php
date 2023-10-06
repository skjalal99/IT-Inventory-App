<?php 

spl_autoload_register(function($classname){

	require $filename = "../../application/models/".ucfirst($classname).".php";
});

require 'config.php'; // Database details & siteurl
require 'functions.php';//All general functions
require 'database.php';// Connection to db, using the above config file
require 'modelqueries.php';//CRUD functions queries
require 'mycontroller.php';//Its like a framework , it'll check model, view & controller files existance
require 'route.php'; //routing of url, to desire controllers,methods & params.
//if you want helpers like linking to css or js