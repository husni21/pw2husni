<?php

spl_autoload_register(function($class) {
    include str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
});  

use src\View;
$g = new View();
$g->render();

echo "<br>";

$z = new \src\Mahasiswa();
$z->test();

 ?>