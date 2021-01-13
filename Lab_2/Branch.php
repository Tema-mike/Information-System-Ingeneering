<?php
//namespace Lab2;
require_once ('Cell.php');

class Branch implements Cell {
    public $name;
    public $products;

    public function __construct($name, $products){
        $this->name = $name;
        $this->products = $products;
    }

    public function getName(){
        return $this->name;
    }

    public function getProducts(){
        return $this->products;
    }

    public function record(Visitor $visitor) {
        return $visitor->recordBranch($this);
    }

    public function analysis(){
        $profit = 0;
        foreach ($this->getProducts() as $product){
            $profitProd =  $product->sailed * $product->price;
            $profit += $profitProd;
        }
        echo "Прибыль филиала " . $this->getName() . " : " . $profit . "<br>";
    }
}