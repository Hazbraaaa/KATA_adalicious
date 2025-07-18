<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        $menus = [
            [
                'name' => 'Hello World Burger',
                'description' => "Un cheeseburger classique (pain, steak, fromage, salade, sauce).",
                'image' => '🍔',
                'alt' => 'Un cheeseburger classique (pain, steak, fromage, salade, sauce).',
                'created_at' => now(),
                'updated_at' => now(),
            ],
             [
                'name' => '404 Not Found Fries',
                'description' => "Des frites maison avec une sauce mystère (choisie aléatoirement par le backend !).",
                'image' => '🍟',
                'alt' => 'Des frites maison avec une sauce mystère (choisie aléatoirement par le backend !).',
                'created_at' => now(),
                'updated_at' => now(),
            ],
             [
                'name' => 'JSON Nuggets',
                'description' => "Nuggets de poulet avec 3 sauces au choix (ketchup, mayo, barbecue).",
                'image' => '🍗',
                'alt' => 'Nuggets de poulet avec 3 sauces au choix (ketchup, mayo, barbecue).',
                'created_at' => now(),
                'updated_at' => now(),
            ],
             [
                'name' => 'Git Pull Tacos',
                'description' => "Un taco simple avec poulet, salade, fromage et sauce.",
                'image' => '🌮',
                'alt' => 'Un taco simple avec poulet, salade, fromage et sauce.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
             [
                'name' => 'Front-end Salad',
                'description' => "Une salade légère avec tomates, feta et vinaigrette maison.",
                'image' => '🥗',
                'alt' => 'Une salade légère avec tomates, feta et vinaigrette maison.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
             [
                'name' => 'Back-End Brownie',
                'description' => "Un brownie moelleux au chocolat.",
                'image' => '🍫',
                'alt' => 'Un brownie moelleux au chocolat.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
             [
                'name' => 'Full Stack Menu',
                'description' => "Un combo burger, frites et boisson.",
                'image' => '🥗',
                'alt' => 'Un combo burger, frites et boisson',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        Menu::insert($menus);
    }
}