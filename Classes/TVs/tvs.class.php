<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

namespace PhpHomework11;

class TV extends Product
{
	public $lighting; // подсветка
	public $diagonal; //диагональ экрана
	public $dataformat; 
	
	public function __construct($productName, $productType, $productPrice, $diagonal, $dataformat, $lighting)
	{
		$this->productName=$productName;
		$this->productType=$productType;
		$this->productPrice=$productPrice;
		$this->diagonal=$diagonal;
		$this->dataformat=$dataformat;
		$this->lighting=$lighting;
		?>
		<p><strong>Новинка в категории <?php echo $this->productType ?></strong></p>
		<?php
	}

	public function getDescription()
	{
		echo "<pre>";
		print_r("Телевизор: " . $this->productName);
		echo "</pre>";

		if (isset($this->diagonal))
		{
			echo "<pre>";
			print_r("Диагональ: " . $this->diagonal);
			echo "</pre>";
		} 
		else 
		{
			echo "<pre>";
			print_r("Диагональ: не задана");
			echo "</pre>";
		}
		
		if (isset($this->dataformat)) 
		{
			echo "<pre>";
			print_r("Качество принимаемых данных: " . $this->dataformat);
			echo "</pre>";
		} 
		else 
		{
			echo "<pre>";
			print_r("Качество принимаемых данных: не задано");
			echo "</pre>";
		}

		if ($this->lighting=true) 
		{
			echo "<pre>";
			print_r("Подсветка корпуса по периметру: присутствует.");
			echo "</pre>";
			echo "<pre>";
			print_r("Рекомендации к реализации: реализуем по спекулятивной цене!");
			echo "</pre>";
		}
		
		if ($this->lighting=false) 
		{
			echo "<pre>";
			print_r("Подсветка корпуса по периметру: отутствует.");
			echo "</pre>";
			echo "<pre>";
			print_r("Рекомендации к реализации: подарите это барахло клиентам! Разгрузите склад!!");
			echo "</pre>";
		}
	}	
}
?>