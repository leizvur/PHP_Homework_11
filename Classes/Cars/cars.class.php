<?php
namespace Classes

error_reporting(E_ALL);
ini_set("display_errors", 1);

class Cars extends Product
{
	public $transmission; // тип коробки передач
	public $package; // комплектация

	public function __construct($productName, $productType, $productPrice, $transmission, $package)
	{
		$this->productName=$productName;
		$this->productType=$productType;
		$this->productPrice=$productPrice;
		$this->transmission=$transmission;
		$this->package=$package;
		?>
		<p><strong>Новинка в категории <?php echo $this->productType ?></strong></p>
		<?php
	}

	public function getDescription()
	{	
		echo "<pre>";
		print_r("Автомобиль нового поколения: " . $this->productName);
		echo "</pre>";

		if (isset($this->package))
		{
			echo "<pre>";
			print_r("Заявленная комплектация: " . $this->package);
			echo "</pre>";
		} 
		else 
		{
			echo "<pre>";
			print_r("Заявленная комплектация: не задана");
			echo "</pre>";
		}
		
		if (isset($this->transmission)) 
		{
			echo "<pre>";
			print_r("Коробка передач: " . $this->transmission);
			echo "</pre>";
		} 
		else 
		{
			echo "<pre>";
			print_r("Коробка передач: не задана");
			echo "</pre>";
		}
	}
}
	
?>