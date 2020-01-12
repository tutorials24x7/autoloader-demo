<?php
require __DIR__ . "\../vendor/autoload.php";

use vehicles\impl\Car;
use vehicles\impl\Truck;

$car = new Car();

$car->setId(1231234);
$car->setName('Renault Triber');
$car->setMaxPassengers(7);

$truck = new Truck();

$truck->setId(1090231);
$truck->setName('Toyota Tundra');
$truck->setMaxLoad(910);
?>
<!DOCTYPE html>
<html lang="en-US">
	<head>
		<title>Vehicles - Autoloading Demo</title>
	</head>
	<body>
		<h1>Car Details</h1>
		<table>
			<tr><td>Id</td><td><?= $car->getId() ?></td></tr>
			<tr><td>Name</td><td><?= $car->getName() ?></td></tr>
			<tr><td>Max Passengers</td><td><?= $car->getMaxPassengers() ?></td></tr>
		</table>
		<h1>Truck Details</h1>
		<table>
			<tr><td>Id</td><td><?= $truck->getId() ?></td></tr>
			<tr><td>Name</td><td><?= $truck->getName() ?></td></tr>
			<tr><td>Max Load</td><td><?= $truck->getMaxLoad() ?></td></tr>
		</table>
	</body>
</html>
