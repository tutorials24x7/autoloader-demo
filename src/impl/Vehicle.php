<?php
namespace vehicles\impl;

use vehicles\design\IVehicle;

abstract class Vehicle implements IVehicle {

	protected $id;

	protected $name;

	public function getId() : int {

		return $this->id;
	}

	public function setId(int $id) {

		$this->id = $id;
	}

	public function getName() : string {

		return $this->name;
	}

	public function setName( string $name) {

		$this->name = $name;
	}
}