<?php
session_start();
var_dump($_SESSION);

$_SERVER["DOCUMENT_ROOT"];
//var_dump($_SERVER["DOCUMENT_ROOT"]);

function Load($className)
{
	$className=str_replace('\\', DIRECTORY_SEPARATOR, $className);
	//var_dump($className);
	$filePath=$_SERVER["DOCUMENT_ROOT"] . "\Classes" . DIRECTORY_SEPARATOR . $className . DIRECTORY_SEPARATOR . $className . ".class.php";
	//var_dump($filePath);
	if (file_exists($filePath)) 
	{
		echo "Class " . $className . ".class.php found!";
		include_once "$filePath";
	}
	else
	{
		echo "Class " . $className . ".class.php not found!";
	} 
}	

spl_autoload_register("Load");

$Toyota=new Cars("Toyona Avenses", "Автомобиль", 1200000, "Manual", "Sol");
$Toyota->getProductDescription("RUR");
$BMW=new Cars("BMW X5", "Автомобиль", 300000, "Auto", "Business");
$BMW->getProductDescription("EUR");

$duckHome=new Ducks("домоседки", "Животные\птицы", 50000, "хлеб", "девочки");
$duckHome->getProductDescription("RUR");
$duckWild=new Ducks("разгуляи", "Животные\птицы", 80000, "зерно", "селезни");
$duckWild->getProductDescription("RUR");

$tvDigital=new TVset("iDaTV", "Аудио\видео", 100000, "100", "4K", true);
$tvDigital->getProductDescription("RUR");
$tvAnalog=new TVset("NeDoTV", "Аудио\видео", 100, "55", "ЭраДоHD", false);
$tvAnalog->getProductDescription("RUR");

$penSchool=new Pens("3D-ручки", "Канцтовары", 100, "синие", "школьники");
$penSchool->getProductDescription("RUR");
$penBusiness=new Pens("Паркер-перо", "Канцтовары", 200, "черные", "бизнес");
$penBusiness->getProductDescription("RUR");

$objects=[$Toyota, $BMW, $duckHome, $duckWild, $tvAnalog, $tvDigital, $penSchool, $penBusiness];
if (!empty($objects))
{
	$_SESSION["objects"] = $objects;
	var_dump($_SESSION["objects"]);
} 
else 
{
	echo "Objects are not defined!";
}


?>