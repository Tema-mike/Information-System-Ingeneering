<?php
//namespace Lab2;
require_once ('Visitor.php');

class Analysis implements Visitor {

    public $currentCell;
    //------ Наследуемые от Visitor методы -------//
    //--------------------------------------------//
    public function recordCompany(Company $company){
        echo "Компания: " . $company->getName() . "<br>";
        foreach ($company->getBranches() as $branches){
            echo "<br>Филиал: " . $branches->getName() . "<br>";
            foreach ($branches->getProducts() as $products){
                echo "<br>" . $products->getParams();
            }
        }
    }

    public function recordBranch(Branch $branch){
        echo "Филиал: " . $branch->getName() . "<br>";
        foreach ($branch->getProducts() as $products){
            echo "<br>" . $products->getParams();
        }
    }

    public function recordProduct(Product $product) {
        echo $product->getName() . " Кол-во: " . $product->getQuantity() . " Цена: " . $product->getPrice() . " Продано: " . $product->getSailed();
    }

    //------ Наследуемые от Iterator методы -------//
    //--------------------------------------------//

    public function rewind() {
        $this->currentCell = 0;
    }

    public function valid($obj) {
        if ($obj instanceof Company) {
            return $status = 1;
        } elseif ($obj instanceof Branch) {
            return $status = 2;
        } elseif ($obj instanceof Product) {
            return $status = 3;
        } else {
            echo "Ошибка! Выбран неверный объект";
        }
    }

    public function key($obj) {
        $obj->record();
    }

    public function current($obj, $valid) {
        if ($valid == 1){
            $obj->analysis();
        }
        elseif ($valid == 2){
            $obj->analysis();
        }
        elseif ($valid == 3){
            $obj->analysis();
        }
        $this->currentCell ++;
    }

    public function next($obj, $valid) {
        if ($valid == 1){
            if ($this->currentCell == count($obj->branches)) {
                echo "Достигнут предел коллекции!";
            }
        }
        elseif ($valid == 2){
            if ($this->currentCell == count($obj->products)) {
                echo "Достигнут предел коллекции!";
            }
        }
        else {
            echo "Выбранная коллекция не существует!";
        }
    }
}