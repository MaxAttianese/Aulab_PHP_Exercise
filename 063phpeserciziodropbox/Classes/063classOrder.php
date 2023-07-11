<?php

//Include trait for function printOrderState
include( "Traits/063traitOrderState.php");


//Include Interface for constraint payment function (with parameter)
include( "Interfaces/063interfaceMethodpayment.php");


// Class Order

class Order implements Methodpayment {

    public const IVA = 22;

    public $cart;

    public  $totIvaE;

    public  $totIvaI;

    
    public function addproducts($product) {

        $this->cart[$product -> name] = [

            "Name Product" => $product->name,

            "Price" => $product->priceUnit,

            "Quantity" => $product->qt,

        ];
    }

    public function cart() {

        foreach($this->cart as $element) {

            $this->totIvaE = $element["Price"] * $element["Quantity"];

            $this->totIvaI = $this->totIvaE * (1 + self :: IVA / 100);


            echo $element["Quantity"] . " - " . $element["Name Product"] . " - " . $this->totIvaE . " - " . $this->totIvaI . "\n";
        }


    }

    public $total = 0;

    public function total($stampaMessaggio = false) {

        foreach($this -> cart as $element) {

            $this->totIvaE = $element["Price"] * $element["Quantity"];

            $this->totIvaI = $this->totIvaE * (1 + self::IVA / 100);


            $this->total += $this->totIvaI;
        }

        if($stampaMessaggio){

            echo "Importo totale ordine: €" . $this->total;

        }
        else{

            return $this->total;

        }
        
    }

    public static function printIva() {

        echo self::IVA . "\n";
    }

    use OrderState;

    public function payment($metodoPagamento) {

        $metodoPagamento->payment();
    }


}


?>