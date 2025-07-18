<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller {

    public function getOrders (Request $request) {
        $orders = Order::where('status', 'In the kitchen')
            ->get();

        return response()->json($orders, 200);
    }

    public function getAnOrder ($id) {
        $order = Order::where('id', $id)
            ->get();

        return response()->json($order, 200);
    }

    public function createOrder (Request $request) {
        $user = auth()->user();
        $user_id = $user->id;
        $menu_id = $menu->id;
        
        $Orderdata = Order::create([
            'status' => 'In the kitchen',
            'user_id' => $user_id,
            'menu_id' => $menu_id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return response()->json([
            'message' => 'Order created',
            'order' => $Orderdata,
        ], 200);
    }

    public function updateOrder ($id) {
        // A faire
    }

    public function deleteOrder ($id) {
        $user = auth()->user();
        $order = Order::where('id', $id);
        
        if (!$order) {
            return response()->json(['message' => 'Order not found.'], 404);
        }
        $order->delete(); 

        return response()->json(['message' => 'Order done'], 200);
    }
}
