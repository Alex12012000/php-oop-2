<?php 

require_once __DIR__ . '/BarCode.php';
class Product {

    use BarCode;


    public $productName;

    public $price;

    public function __construct($_name, $_price) 
    {
        $this->productName = $_name;
        $this->price = $_price;
    }

}

?>