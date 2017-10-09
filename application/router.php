<?php

function my_autoload($class) {

include_once('application/'.strtolower($class).'.class.php');

}
spl_autoload_register("my_autoload");




new Controller();


 ?>
