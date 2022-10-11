<?php

class Basket 
{
    public $itemsTotal;
    public $shippingCost;
    public $discountValue;

    public function calculateSubTotal() {
        
        $subtotal = $this->itemsTotal + $this->shippingCost;
    
        return $subtotal;
    }

    public function calculateDiscount() {
        
        $discount = $this->itemsTotal + $this->shippingCost - $this->discountValue;

        return $discount;
    }

}

$basket = new Basket();
$basket->itemsTotal = 5;
$basket->shippingCost = 24;
$basket->discountValue = 10;

var_dump($basket->calculateSubTotal());
echo '<br>';
var_dump($basket->calculateDiscount());