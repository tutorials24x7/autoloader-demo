<?php
namespace vehicles\design;

interface ITruck extends IVehicle {

	public function getMaxLoad() : float;

	public function setMaxLoad(float $maxLoad);
}