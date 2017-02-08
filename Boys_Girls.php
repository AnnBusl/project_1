<html>
<head><title>������ ���</title></head>
<body>
<?php

/* ��������� Say */ 
interface Say { 
	public function say(); 
} 

/* ����������� ����� Children, ���������������� ��������� Say */ 
abstract class Children implements Say{ 
	
	private $name;
	
	public function __construct($name) { 
		$this->name = $name; 
	} 
		
	public function getName() { 
		return $this->name; 
	} 
	
} 

/* ����� �������� ��������� ����� �������� Children � ������ ����������� ����� say()*/ 
class Boys extends Children { 
	
	public function __construct($name) { 
		parent::__construct($name); 
	} 

	public function say() { 
		echo "������! ��� ����? ���� ����� ".$this->getName()." � "; 
	} 
	
	public function swim() { 
		echo "� ���� �������"; 
	} 
	
} 

/* ����� ������� ��������� ����� �������� Children � ������ ����������� ����� say() */ 
class Girls extends Children { 
	
	public function __construct($name) { 
		parent::__construct($name); 
	} 

	public function say() { 
		echo "������! ������. ���� ����� ".$this->getName()." � "; 
	} 
	
	public function cook() { 
		echo "� ���� ��������"; 
		} 
	} 
	
/* ������� ��������� ������ Boys � �������� ������ */ 
$Boys = new Boys("����"); 
$Boys->say(); 
$Boys->swim(); 

/* ������� ��������� ������ Girls � �������� ������ */ 
$Girls = new Girls("�����"); 
$Girls->say(); 
$Girls->cook();

?>
</body>
</html>