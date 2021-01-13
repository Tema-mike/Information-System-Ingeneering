<?php
//namespace Lab2;
require_once ('Cell.php');

class Company implements Cell {
    public $name;
    public $branches;

    public function __construct($name, $branches){
        $this->name = $name;
        $this->branches = $branches;
    }

    public function getName() {
        return $this->name;
    }

    public function getBranches() {
        return $this->branches;
    }

    public function record(Visitor $visitor) {
        return $visitor->recordCompany($this);
    }

    public function analysis(){
        $profit = 0;
        foreach ($this->getBranches() as $branch){
            $profitBranch = 0;
            foreach ($branch->getProducts() as $product){
                $profitProd =  $product->sailed * $product->price;
                $profitBranch += $profitProd;
            }
            $profit += $profitBranch;
        }
        echo "Прибыль компании " . $this->getName() . " : " . $profit . "<br>";
    }
}