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

class Basket
{
	
	public $product;
	public $productAmount;
	protected $productTotalPrice;
	protected $orderSum;

	protected function getTotalPrice($product)
	{
		$this->product=$product;
		$this->productAmount=$productAmount;
		$this->productTotalPrice=$productTotalPrice
		
		if (isset($product)) 
		{
			$this->productTotalPrice=$this->productAmount * $this->productPrice;
			return $this;
		} 
		else 
		{
			echo "Выберите продукт!";
		}		
	}

	protected function getOrderSum()
	{
		
	}
}
?>