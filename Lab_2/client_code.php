<?php
//namespace Lab2;

require_once ('Branch.php');
require_once ('Company.php');
require_once ('Product.php');


$branch1 = new Branch('Москва', [
    new Product('Продукт1',66,100,34),
    new Product('Продукт2',25,1700,5),
    new Product('Продукт3',97,50, 68),
    new Product('Продукт4',20,1940,13),
    new Product('Продукт5',100,10,108),
    new Product('Продукт6',81,90,22),
    new Product('Продукт7',19,4800,2),
]);

$branch2 = new Branch('Казань', [
    new Product('Продукт1',63,100,34),
    new Product('Продукт2',21,1700,2),
    new Product('Продукт3',57,50, 11),
    new Product('Продукт4',23,1940,107),
    new Product('Продукт5',750,10,1031),
    new Product('Продукт6',90,90,26),
    new Product('Продукт7',32,4800,1),
]);

$branch3 = new Branch('Уфа', [
    new Product('Продукт1',66,100,75),
    new Product('Продукт2',22,1700,2),
    new Product('Продукт3',44,50, 608),
    new Product('Продукт4',28,1940,3),
    new Product('Продукт5',160,10,18),
    new Product('Продукт6',48,90,24),
    new Product('Продукт7',9,4800,0),
]);

$company = new Company("Abibas", [$branch1, $branch2, $branch3]);