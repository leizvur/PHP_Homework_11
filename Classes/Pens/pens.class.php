<?php
namespace PhpHomework11;

error_reporting(E_ALL);
ini_set("display_errors", 1);

class Pen extends Product
 {
 	public $color;
 	public $audience;
 	
	public function __construct($productName, $productType, $productPrice, $color, $audience)
	{
		$this->productName=$productName;
		$this->productType=$productType;
		$this->productPrice=$productPrice;
		$this->color=$color;
 		$this->audience=$audience;
		?>
		<p><strong>Новинка в категории <?php echo $this->productType ?></strong></p>
		<?php
	}

 	public function getDescription()
 	{
 		echo "<pre>";
 		print_r("Ручки для письма: " . $this->productName);
 		echo "<pre>";
 		echo "</pre>";
 		print_r("Целевая аудитория: " .  $this->audience);
 		echo "</pre>";
 		echo "</pre>";
 		print_r("Цвет чернил: " . $this->color);
 		echo "</pre>";
 	}
 }
?>