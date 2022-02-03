<?php

class Producto
{
	protected $id;
	protected $codigo;
	protected $nombre; 

	function getId()
	{
		return $this->id;
	}

	function setId($id)
	{
		$this->id=$id;
	}


	function getCodigo()
	{
		return $this->codigo;
	}

	function setCodigo($codigo)
	{
		$this->codigo=$codigo;
	}

	function getNombre()
	{
		return $this->nombre;
	}

	function setNombre($nombre)
	{
		$this->nombre=$nombre;
	}


	function save()
	{
		//conect 
		//
	}

}