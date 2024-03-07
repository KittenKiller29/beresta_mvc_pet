<?php
  	define('host','localhost');
  	define('user','root');
  	define('password','Z-fAm9oHIj');
  	define('db','beresta');
  	define('controller_path','application/controlers/');
  	define('view_path','application/views/');
  	define('model_path','application/models/');
  	define('root',$_SERVER['DOCUMENT_ROOT']);
  	require_once 'db.php';
  	require_once 'route.php';
  	require_once model_path. 'Model.php';
  	require_once view_path. 'View.php';
  	require_once controller_path. 'Controller.php';
  	Routing::buildRoute();
