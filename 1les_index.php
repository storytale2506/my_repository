<?
// Task 1,2,3
class  HomeAnimals {
	var $little_size; //состояние 1 - небольшие размеры
	var $instincts; //состояние 2 - инстинктивное поведение
	var $little_life; //состояние 3 - небольшой срок жизни
		
		function __construct($little_size,$instincts,$little_life) {
			$this->little_size = $little_size;
			$this->instincts = $instincts;
			$this->little_life = $little_life;
			$this->voices();
			$this->needCare();
		}
		function voices() {} //поведение 1 - издают непонятные звуки
		function needCare() {} //поведение 2 - нужен уход
}

// Task 4
class Cats extends HomeAnimals {
	var $wool; // наличие шерсти
	
		function __construct($little_size,$instincts,$little_life,$wool) {
			parent::__construct($little_size,$instincts,$little_life);
			$this->wool = $wool;
			$this->molting();
		}
		
		function molting() {} // линяют
}

class Parrots extends HomeAnimals {
	var $beak; // наличие клюва
	
		function __construct($little_size,$instincts,$little_life,$beak) {
			parent::__construct($little_size,$instincts,$little_life);
			$this->beak=$beak;
			$this->canFly();
		}
		
		function canFly() {} // могут летать 
}

// Task 5

class A {
	public function foo() {
		static $x = 0; // особенность использования static перед переменной. Переменная сначала присваивается, а потом при каждом последующем вызове метода берется ранее созраненное значение 
		echo ++$x;
	}
}

$a1 = new A();
$a2 = new A();

$a1->foo(); // 1 
$a2->foo(); // 2
$a1->foo(); // 3
$a2->foo(); // 4

// Task 6

class A {
	public function foo() {
		static $x = 0; // в данном случае, в отличие от предыдущего методы будут работать как бы независимо друг от друга, т.к. классы разные. Но учитывая особенность static перед переменной ее ($x) значение будет храниться для каждого класса, после каждого вызова метода 
		echo ++$x;
	}
}

class B extends A {
}

$a1 = new A();
$b1 = new B();

$a1->foo(); // 1
$b1->foo(); // 1
$a1->foo(); // 2
$b1->foo(); // 2

?>