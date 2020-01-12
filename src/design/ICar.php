<?php
namespace vehicles\design;

interface ICar extends IVehicle {

	public function getMaxPassengers() : int;

	public function setMaxPassengers(int $maxPassengers);
}