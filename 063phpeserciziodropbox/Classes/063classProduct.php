<?php

// Namespace
namespace Hack;

// Abstract Class Product
abstract class Product {

    public $name;

    public $priceUnit;

    public function __construct($nameValue, $priceUnitValue) {

        $this->name = $nameValue;

        $this->priceUnit = $priceUnitValue;

    }

}



?>