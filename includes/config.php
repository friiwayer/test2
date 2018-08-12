<?php
ob_start();
session_start();
define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS',"");
define('DBNAME','test2');
define('TABLE_POST','blog_posts');

try {
    $db = new PDO('mysql:host=localhost;dbname='.DBNAME, DBUSER, DBPASS);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
date_default_timezone_set('Etc/GMT+3');
function __autoload($class) {
   
   $class = strtolower($class);

   $classpath = 'classes/class.'.$class . '.php';
   if ( file_exists($classpath)) {
      require_once $classpath;
	}
   $classpath = '../classes/class.'.$class . '.php';
   if ( file_exists($classpath)) {
      require_once $classpath;
	}
   $classpath = '../../classes/class.'.$class . '.php';
   if ( file_exists($classpath)) {
      require_once $classpath;
	}
}

function head()
{
    $css = array(
        '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">',
        '<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">',
        '<link href="style/main.css" rel="stylesheet">'
    );
    $title = array('<title>Блог</title>');
    $meta = array(
        '<meta charset="utf-8" />',
        '<meta content="IE=edge" http-equiv="X-UA-Compatible" />',
        '<meta content="width=device-width,initial-scale=1" name="viewport" />',
        '<meta content="Блог" name="description" />',
        '<meta content="Блог" name="author" />'
    );

    return implode('',  array_merge($meta , $title , $css));
}

function scripts()
{
    $js = array(
        '<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>',
        '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>',
        '<script src="js/scripts.js" > </script>'
    );


    return implode('',  $js);
}

?>