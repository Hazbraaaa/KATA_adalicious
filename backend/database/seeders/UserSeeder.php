<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Lolo le zozo',
            'email' => 'test@example.com',
            'password' => Hash::make('test')
        ]);
        $this->call([
              MenuSeeder::class,
          ]);
        $this->call([
              OrderSeeder::class,
          ]);
    }
}