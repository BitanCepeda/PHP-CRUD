<?php

// Desactivar toda notificación de error
error_reporting(0);

require('medico.php');

$medico = new medicoServicio();

$medico->registrar("CARLOS", "MARIO", "PABA", "RODRIGUEZ", "CC", "1111111111", "01/01/01");
$medico->registrar("CARLOS", "MARIO", "PABA2", "RODRIGUEZ", "DI", "1111111111", "01/01/01");
$medico->registrar("CARLOS", "MARIO", "PABA2", "RODRIGUEZ", "DI", "1010101010", "01/01/01");



$medico->verTodos();
