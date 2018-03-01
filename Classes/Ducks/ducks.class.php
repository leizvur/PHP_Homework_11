<?php
namespace Classes;

error_reporting(E_ALL);
ini_set("display_errors", 1);

class Duck extends Product
{
	public $food; //корм для уток
	public $sex; //пол утки

	public function __construct($productName, $productType, $productPrice, $food, $sex)
	{
		$this->productName=$productName;
		$this->productType=$productType;
		$this->productPrice=$productPrice;
		$this->food=$food;
		$this->sex=$sex;
		?>
		<p><strong>Новинка в категории <?php echo $this->productType ?></strong></p>
		<?php
	}

	public function getDescription()
	{
		echo "<pre>";
		print_r("Поступили редчайшие утки-" . $this->productName);
		echo "</pre>";

		if ($this->sex=="девочки") 
		{
			echo "<pre>";
			echo "Пол уток: " . $this->sex;
			echo "</pre>";
			echo "<pre>";
			echo "Корм уток: " . $this->food;
			echo "</pre>";
		}
		elseif ($this->sex=="селезни") 
		{
			echo "<pre>";
			echo "Пол уток: " . $this->sex;
			echo "</pre>";
			echo "<pre>";
			echo "Корм уток: " . $this->food;
			echo "</pre>";
		}
	}	
}

?>
