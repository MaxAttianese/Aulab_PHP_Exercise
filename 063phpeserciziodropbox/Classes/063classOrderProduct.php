<?php

// Namespace
namespace Hack;

// Include abstract class Product
include( "Classes/063classProduct.php");




// Class OrderProduct
class OrderProduct extends Product {

    public $qt;

    public function __construct ($nameValue, $priceUnitValue, $qtValue) {

        parent :: __construct($nameValue, $priceUnitValue);

        $this->qt = $qtValue;

    }

}


?>