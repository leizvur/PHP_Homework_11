<?php

namespace PhpHomework11;

function ProductLoad($className)
{
	$className="product_base";
	$filePath="./Classes/Base/" . $className . ".class.php";
	if (file_exists($filePath)) 
	{
		include_once "$filePath";
	}
	else
	{
		echo "Class " . $className . ".class.php not found!";
	} 
}	

function CarsLoad($className)
{
	$className="cars";
	$filePath="./Classes/Cars/" . $className . ".class.php";
	if (file_exists($filePath)) 
	{
		include_once "$filePath";
	}
	else
	{
		echo "Class " . $className . ".class.php not found!";
	}  
}	

function DucksLoad($className)
{
	$className="ducks";
	$filePath="./Classes/Ducks/" . $className . ".class.php";
	if (file_exists($filePath)) 
	{
		include_once "$filePath";
	}
	else
	{
		echo "Class " . $className . ".class.php not found!";
	}  
}	

function TvLoad($className)
{
	$className="tvs";
	$filePath="./Classes/TVs/" . $className . ".class.php";
	if (file_exists($filePath)) 
	{
		include_once "$filePath";
	}
	else
	{
		echo "Class " . $className . ".class.php not found!";
	} 
}	

function PensLoad($className)
{
	$className="pens";
	$filePath="./Classes/Pens/" . $className . ".class.php";
	if (file_exists($filePath)) 
	{
		include_once "$filePath";
	}
	else
	{
		echo "Class " . $className . ".class.php not found!";
	}  
}

spl_autoload_register("ProductLoad");
spl_autoload_register("CarsLoad");
spl_autoload_register("DucksLoad");
spl_autoload_register("TvLoad");
spl_autoload_register("PensLoad");


$Toyota=new Car("Toyona Avenses", "Автомобиль", 1200000, "Manual", "Sol");
$Toyota->getProductDescription("RUR");
$BMW=new Car("BMW X5", "Автомобиль", 300000, "Auto", "Business");
$BMW->getProductDescription("EUR");

$duckHome=new Duck("домоседки", "Животные\птицы", 50000, "хлеб", "девочки");
$duckHome->getProductDescription("RUR");
$duckWild=new Duck("разгуляи", "Животные\птицы", 80000, "зерно", "селезни");
$duckWild->getProductDescription("RUR");

$tvDigital=new TV("iDaTV", "Аудио\видео", 100000, "100", "4K", true);
$tvDigital->getProductDescription("RUR");
$tvAnalog=new TV("NeDoTV", "Аудио\видео", 100, "55", "ЭраДоHD", false);
$tvAnalog->getProductDescription("RUR");

$penSchool=new Pen("3D-ручки", "Канцтовары", 100, "синие", "школьники");
$penSchool->getProductDescription("RUR");
$penBusiness=new Pen("Паркер-перо", "Канцтовары", 200, "черные", "бизнес");
$penBusiness->getProductDescription("RUR");

?>