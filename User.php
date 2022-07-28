<?php 

    class User {

        public $name;

        public $balance;

        public $selectedProduct = [];

        public function __construct($_name, $_balance)
        {   
            $this->name = $_name;
            $this->balance = $_balance;
        }

        public function getItem($_product) {
            $this->selectedProduct[] = $_product;
            return $this->selectedProduct;
        }

        public function pay($_ccBalance) {
            foreach($this->selectedProduct as $product) {
                $product->price -= $product->price * $this->sconto / 100;
                if($_ccBalance > $product->price) {
                    echo 'Comprato!';
                } else {
                    die('Non hai abbastanza denaro, registrati per ottenere uno sconto fantastico!');
                }
            }
        }


    }

?>