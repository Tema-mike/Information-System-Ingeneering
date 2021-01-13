<?php
//namespace Lab2;

interface Visitor {
    public function recordCompany(Company $company);
    public function recordBranch(Branch $branch);
    public function recordProduct(Product $product);
}