<html>
<head><title>Основы ООП</title></head>
<body>
<?php

/* Интерфейс Say */ 
interface Say { 
	public function say(); 
} 

/* Абстрактный класс Children, имплементирующий интерфейс Say */ 
abstract class Children implements Say{ 
	
	private $name;
	
	public function __construct($name) { 
		$this->name = $name; 
	} 
		
	public function getName() { 
		return $this->name; 
	} 
	
} 

/* Класс Мальчики наследует класс родителя Children и обязан реализовать метод say()*/ 
class Boys extends Children { 
	
	public function __construct($name) { 
		parent::__construct($name); 
	} 

	public function say() { 
		echo "Привет! Как дела? Меня зовут ".$this->getName()." и "; 
	} 
	
	public function swim() { 
		echo "я умею плавать"; 
	} 
	
} 

/* Класс Девочки наследует класс родителя Children и обязан реализовать метод say() */ 
class Girls extends Children { 
	
	public function __construct($name) { 
		parent::__construct($name); 
	} 

	public function say() { 
		echo "Привет! Хорошо. Меня зовут ".$this->getName()." и "; 
	} 
	
	public function cook() { 
		echo "я умею готовить"; 
		} 
	} 
	
/* Создаем экземпляр класса Boys и вызываем методы */ 
$Boys = new Boys("Дима"); 
$Boys->say(); 
$Boys->swim(); 

/* Создаем экземпляр класса Girls и вызываем методы */ 
$Girls = new Girls("Света"); 
$Girls->say(); 
$Girls->cook();

?>
</body>
</html>