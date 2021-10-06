<?php
function autoload($class)
{
	if ($class != "Entity")	require '../'.str_replace('\\', '/', $class).'.class.php';
}

spl_autoload_register('autoload');
?>