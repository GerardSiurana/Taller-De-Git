<?php
// Autor: Sergio Gómez <sergio@uco.es>
print "Introduce tu nombre:";
$nombre = trim(fgets(STDIN));
require('HolaMundo.php');

print new HolaMundo($nombre);
