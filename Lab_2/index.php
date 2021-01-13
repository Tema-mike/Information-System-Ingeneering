<?php
//namespace Lab2;
require_once ('client_code.php');
require_once ('Analysis.php');



$analysis = new Analysis();

//Отчет всей компании
//echo $company->record($analysis);

//Отчет филиала
//$branch1->record($analysis);

//Отчет по продукту
//$branch2->products[0]->record($analysis);
/*
foreach ($company->branches as $branch){
    $valid = $analysis->valid($branch);
    $analysis->current($branch, $valid);
}
*/
/*
echo $branch1->getName() . "<br>";
foreach ($branch1->products as $product){
    $valid = $analysis->valid($product);
    $analysis->current($product, $valid);
}
*/