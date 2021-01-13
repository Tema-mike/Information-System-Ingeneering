<?php
//namespace Lab2;
require_once ('Cell.php');

class Product implements Cell {

    public $name;
    public $quantity;
    public $price;
    public $sailed;

    public function __construct($name, $quantity, $price, $sailed){
        $this->name = $name;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->sailed = $sailed;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getSailed()
    {
        return $this->sailed;
    }

    public function getParams(){
        echo $this->name . " ";
        echo $this->quantity  . " ";
        echo $this->price . " ";
        echo $this->sailed . " ";
    }

    public function record(Visitor $visitor) {
        return $visitor->recordProduct($this);
    }

    public function analysis(){
        echo "Прибыль с продукта " . $this->getName() . " : " . $this->sailed * $this->price . "<br>";
    }
}
