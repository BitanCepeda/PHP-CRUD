<?php

require('persona.php');


class medicoServicio
{
	
	private $medicoList = array();
	
	
	
	public function registrar($primerN, $segundoN, $primerA, $segundoA, $tipo, $numero, $fecha)
	{
		
		$opcion = 0;
		foreach ($this->medicoList as $medic){
			if($medic->numeroDocumento==$numero && $medic->tipoDocumento==$tipo){
				echo "Ya se encuentra registrado un medico con este tipo de documento y número";
			$opcion=$opcion+1;}
			elseif($medic->numeroDocumento==$numero){
				echo "Ya se encuentra registrado un medico con este número de documento";
			$opcion=$opcion+1;}
		}
		
		if(opcion==0)
		{
		$medico = new persona();
		$medico->primerNombre = $primerN;
		$medico->segundoNombre = $segundoN;
		$medico->primerApellido = $primerA;
		$medico->segundoApellido = $segundoA;
		$medico->tipoDocumento = $tipo;
		$medico->numeroDocumento = $numero;
		$medico->fechaExpeDoc = $fecha;
		array_push($this->medicoList, $medico);
		}	
	}
	
	
	
	public function editar($numero, $primerN, $segundoN, $primerA, $segundoA, $tipo, $fecha)
	{
		$opcion=0;
		foreach ($this->medicoList as $medic){
			if($medic->numeroDocumento==$numero){
				$medic->primerNombre = $primerN;
				$medic->segundoNombre = $segundoN;
				$medic->primerApellido = $primerA;
				$medic->segundoApellido = $segundoA;
				$medic->tipoDocumento = $tipo;
				$medic->fechaExpeDoc = $fecha;
				$opcion=1;}
		}
		
		if($opcion!=0){
		echo "No se encuentra un medico para editar con el documento ingresado";}
		
	}
	
	public function ver($numero)
	{
		$opcion=0;
		foreach ($this->medicoList as $medic){
			if($medic->numeroDocumento==$numero){
				echo $medic->primerNombre;
				echo $medic->segundoNombre;
				echo $medic->primerApellido;
				echo $medic->segundoApellido;
				echo $medic->tipoDocumento;
				echo $medic->fechaExpeDoc;
				$opcion=1;}
		}
		
		if($opcion!=0){
		echo "No se encuentra un medico para mostrar con el documento ingresado";}
	}
	
	
	
	public function verTodos()
	{
		echo "\n<br>";
		echo "\n<br>LISTA DE TODOS LOS MEDICOS";
		
		foreach ($this->medicoList as $medic){
			echo "\n<br>";
			echo $medic->primerNombre;echo "\n";
			echo $medic->segundoNombre;echo "\n";
			echo $medic->primerApellido;echo "\n";
			echo $medic->segundoApellido;echo "\n";
			echo $medic->tipoDocumento;echo "\n";
			echo $medic->fechaExpeDoc;echo "\n";
			echo "\n<br>";
		}
		
	}
	
	
	public function eliminar($numero)
	{
		$opcion=0;
		
		if(array_key_exists($numero, $this->medicoList))
		{
			unset($this->medicoList[$numero]);
		}
		else{
		echo "No se encuentra un medico para eliminar con el documento ingresado";}		
	}
	
	
	
	
}


