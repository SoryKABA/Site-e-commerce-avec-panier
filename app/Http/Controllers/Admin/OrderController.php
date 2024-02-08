<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index($payment_id) {
        $order = Order::where('payment_intent_id', $payment_id)->get();
        $products = [];
        $commandes = [];
        foreach($order->pluck('id') as $k) {
            foreach ($order->pluck("products") as $value) {
                $products[$k] = $value;
            }
        }
        foreach ($products as $value) {
            foreach (array_values(unserialize($value)) as $k => $v) {
                $commandes[$k] = $v;
            }  
        }
        
        return view('admin.order.product', [
            'orders' => $commandes,
            'total' => $order[0]->amount]
        );
    }

    public function orders(Order $order) {
        return view('admin.order.orders', ['orders' => $order->all()]);
    }
}
