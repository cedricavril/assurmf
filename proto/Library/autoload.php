<?php
function autoload($class)
{
	if ($class != "Entity")	require '../'.str_replace('\\', '/', $class).'.class.php';

/*ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


var_dump($class); echo '<br>';
*/}


spl_autoload_register('autoload');
?>