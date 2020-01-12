<?php
namespace vehicles\impl;

use vehicles\design\ITruck;

class Truck extends Vehicle implements ITruck {

	protected $maxLoad;

	public function getMaxLoad() : float {

		return $this->maxLoad;
	}

	public function setMaxLoad(float $maxLoad) {

		$this->maxLoad = $maxLoad;
	}
}