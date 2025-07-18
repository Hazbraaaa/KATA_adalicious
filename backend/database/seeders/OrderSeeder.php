<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        $orders = [
            [
                'status' => 'En cuisine',
                'user_id' => 1,
                'menu_id' =>  4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        Order::insert($orders);
    }
}