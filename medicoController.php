<?php

// Desactivar toda notificación de error
error_reporting(0);

require('medico.php');

$medico = new medicoServicio();

//agregar médicos
$medico->registrar("CARLOS", "MARIO", "PABA", "RODRIGUEZ", "CC", "1111111111", "01/01/01");
$medico->registrar("CARLOS", "MARIO", "PABA2", "RODRIGUEZ", "CC", "1111111111", "01/01/01");
$medico->registrar("CARLOS", "MARIO", "PABA2", "RODRIGUEZ", "TI", "1010101010", "01/01/01");

//editar médico
$medico->editar("1010101010", "A", "B", "C", "D", "PP", "20/12/20");

//ver médico
$medico->ver("1010101010");

//ver todos los médicos
$medico->verTodos();
