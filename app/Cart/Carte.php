<?php

namespace App\Cart;

use Gloudemans\Shoppingcart\Cart as ShoppingcartCart;

class Carte extends ShoppingcartCart {

    private $tax = 5;
    public function tax() {
        return ($this->tax * $this->subtotal()) / 100;
    }

    public function totale() {
        return $this->subtotal() + $this->tax();
    }
}