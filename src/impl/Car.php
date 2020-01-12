<?php
namespace vehicles\impl;

use vehicles\design\ICar;

class Car extends Vehicle implements ICar {

	protected $maxPassengers;

	public function getMaxPassengers() : int {

		return $this->maxPassengers;
	}

	public function setMaxPassengers(int $maxPassengers) {

		$this->maxPassengers = $maxPassengers;
	}
}