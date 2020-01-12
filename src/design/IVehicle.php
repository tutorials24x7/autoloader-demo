<?php
namespace vehicles\design;

interface IVehicle {

	public function getId() : int;

	public function setId(int $id);

	public function getName() : string;

	public function setName( string $name);
}