<?php

// Desactivar toda notificación de error
error_reporting(0);

require('paciente.php');

$paciente = new pacienteServicio();

//agregar paciente
$paciente->registrar("CARLOS", "MARIO", "PABA", "RODRIGUEZ", "CC", "1111111111", "01/01/01");
$paciente->registrar("CARLOS", "MARIO", "PABA2", "RODRIGUEZ", "CC", "1111111111", "01/01/01");
$paciente->registrar("CARLOS", "MARIO", "PABA2", "RODRIGUEZ", "TI", "1010101010", "01/01/01");

//editar paciente
$paciente->editar("1010101010", "A", "B", "C", "D", "PP", "20/12/20");

//eliminar paciente
$paciente->eliminar("1111111111");

//ver paciente
$paciente->ver("1010101010");

//ver todos los pacientes
$paciente->verTodos();
