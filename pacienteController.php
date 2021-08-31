<?php

// Desactivar toda notificación de error
error_reporting(0);

require('paciente.php');

$paciente = new pacienteServicio();

$paciente->registrar("CARLOS", "MARIO", "PABA", "RODRIGUEZ", "CC", "1111111111", "01/01/01");
$paciente->registrar("CARLOS", "MARIO", "PABA2", "RODRIGUEZ", "DI", "1111111111", "01/01/01");
$paciente->registrar("CARLOS", "MARIO", "PABA2", "RODRIGUEZ", "DI", "1010101010", "01/01/01");



$paciente->verTodos();

