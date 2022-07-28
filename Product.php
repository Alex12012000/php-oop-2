<?php 

class Product {

    public $productName;

    public $price;

    public function __construct($_name, $_price) 
    {
        $this->productName = $_name;
        $this->price = $_price;
    }

    public function getData() {
        return ucfirst($this->productName) . ' Prezzo: ' . $this->price . 'Eur';
    }

}

?>