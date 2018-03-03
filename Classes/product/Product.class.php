<?php
namespace Classes;

error_reporting(E_ALL);
ini_set("display_errors", 1);

interface ProductDescriptionInterface
{
	public function getProductDescription($productPrice);
}

abstract class Product implements ProductDescriptionInterface
{
	public $productName;
	public $productType;
	public $productPrice;
	public $currency;
	
	public function __construct($productName, $productType, $productPrice)
	{
		$this->productName=$productName;
		$this->productType=$productType;
		$this->productPrice=$productPrice;
		?>
		<p><strong>Новинка в категории <?php echo $this->productType ?></strong></p>
		<?php
	}

	abstract public function getDescription();

	public function getProductDescription($currency)
	{
		$this->getDescription();
		$this->currency=$currency;
		echo "<pre>";
		print_r("Цена: " . $this->productPrice . " " . $this->currency);
		echo "</pre>";
	}
}
?>