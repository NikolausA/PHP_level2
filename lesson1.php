<?php
//Класс наручных часов
class Watch{
    private $title;
    private $price;
    
    function __construct($title, $price){
        $this->title = $title;
        $this->price = $price;
        
    }
    public function getTitle(){
        return $this->title;
    }
    public function getPrice(){
        return $this->price;
    }
    
    function showCurrentTime(){
        echo "<h1>This is ".$this->title."</h1><br><h3>Current time is ".date("H-i")."</h3>";
    }
}

$watch = new Watch("Tissot", 100);
$watch->showCurrentTime();

//Класс Хронограф, часы с функцией независимого секундомера
class Chronograph extends Watch{
    private $model;
    
    function __construct($title, $model, $price){
        parent::__construct($title, $price);
        $this->model = $model;
    }
    function showCurrentTime(){
        echo "<h1>This is ".$this->getTitle()." model - ".$this->model."</h1><br><h3>Current time is ".date("H:i:s,v")."</h3>";
    }
    
}

$chron = new Chronograph("Citizen", "Eco-Drive", 700);
$chron->showCurrentTime();

//Задание №5
class A {
public function foo() {
static $x = 0;
echo ++$x;
}
}

$a1 = new A();
$a2 = new A();

$a1->foo(); //1 статическая переменная $x привязывается к классу А и после каждого вызова сохраняется в памяти
$a2->foo(); //2
$a1->foo(); //3
$a2->foo(); //4

//Задание №6
class A {
public function foo() {
static $x = 0;
echo ++$x;
}
}

class B extends A {
}

$a1 = new A();
$b1 = new B();

$a1->foo(); //1 статическая переменная $x привязывается к классу А
$b1->foo(); //1 статическая переменная $x привязывается к классу В
$a1->foo(); //2
$b1->foo(); //2

?>