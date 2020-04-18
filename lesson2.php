<?php
abstract class Good{
    private $title;
    private $quantity;
    private $type;
    static $cost;
    
    public function getTitle(){
        return $this->title;
    }
    
    public function getQuantity(){
        return $this->quantity;
    }
    
    public function getType(){
        return $this->quantity;
    }
    
    public function getCost(){
        return $this->cost;
    }
    
    abstract function countCost();
    
    function countAmount(){
        echo "The $quantity of $title costs $quantity*$cost";
    }
}

class SomeGood extends Good{
    function countCost(){
        switch(getType()) {
            case "digit":
                $this->cost = getCost();
                break;
            case "piece":
                $this->cost = getCost();
                break;
            case "weight":
                $this->cost = (getQuantity() > 5) ? getCost() * 0.9 : getCost();
                break;
        }
    }
    
}

$good = new SomeGood;
$good->countAmount("Rice", 8, "weight", 20);
?>