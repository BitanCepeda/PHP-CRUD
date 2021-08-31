<?php

require('persona.php');


class pacienteServicio
{
	
	private $pacienteList = array();
	
	
	
	public function registrar($primerN, $segundoN, $primerA, $segundoA, $tipo, $numero, $fecha)
	{
		
		$opcion = 0;
		foreach ($this->pacienteList as $pacient){
			if($pacient->numeroDocumento==$numero && $pacient->tipoDocumento==$tipo){
				echo "Ya se encuentra registrado un paciente con este tipo de documento y número";
				$opcion=$opcion+1;}
			elseif($pacient->numeroDocumento==$numero){
				echo "Ya se encuentra registrado un paciente con este número de documento";
				$opcion=$opcion+1;}
		}
		
		if(opcion==0)
		{
		$paciente = new persona();
		$paciente->primerNombre = $primerN;
		$paciente->segundoNombre = $segundoN;
		$paciente->primerApellido = $primerA;
		$paciente->segundoApellido = $segundoA;
		$paciente->tipoDocumento = $tipo;
		$paciente->numeroDocumento = $numero;
		$paciente->fechaExpeDoc = $fecha;
		array_push($this->pacienteList, $paciente);
		}	
	}
	
	
	
	public function editar($numero, $primerN, $segundoN, $primerA, $segundoA, $tipo, $fecha)
	{
		$opcion=0;
		foreach ($this->pacienteList as $pacient){
			if($pacient->numeroDocumento==$numero){
				$pacient->primerNombre = $primerN;
				$pacient->segundoNombre = $segundoN;
				$pacient->primerApellido = $primerA;
				$pacient->segundoApellido = $segundoA;
				$pacient->tipoDocumento = $tipo;
				$pacient->fechaExpeDoc = $fecha;
				$opcion=1;}
		}
		
		if($opcion!=0){
		echo "No se encuentra un paciente para editar con el documento ingresado";}
		
	}
	
	public function ver($numero)
	{
		$opcion=0;
		foreach ($this->pacienteList as $pacient){
			if($pacient->numeroDocumento==$numero){
				echo $pacient->primerNombre;
				echo $pacient->segundoNombre;
				echo $pacient->primerApellido;
				echo $pacient->segundoApellido;
				echo $pacient->tipoDocumento;
				echo $pacient->fechaExpeDoc;
				$opcion=1;}
		}
		
		if($opcion!=0){
		echo "No se encuentra un paciente para mostrar con el documento ingresado";}
	}
	
	
	
	public function verTodos()
	{
		echo "\n<br>";
		echo "\n<br>LISTA DE TODOS LOS PACIENTES";
		
		foreach ($this->pacienteList as $pacient){
			echo "\n<br>";
			echo $pacient->primerNombre;echo "\n";
			echo $pacient->segundoNombre;echo "\n";
			echo $pacient->primerApellido;echo "\n";
			echo $pacient->segundoApellido;echo "\n";
			echo $pacient->tipoDocumento;echo "\n";
			echo $pacient->numeroDocumento;echo "\n";
			echo $pacient->fechaExpeDoc;echo "\n";
			echo "\n<br>";
		}
		
	}
	
	
	public function eliminar($numero)
	{
		$opcion=0;
		
		if(array_key_exists($numero, $this->pacienteList))
		{
			unset($this->pacienteList[$numero]);
		}
		else{
		echo "No se encuentra un paciente para eliminar con el documento ingresado";}	
	}
	
	
	
	
}


