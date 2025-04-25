<?php

namespace Database\Seeders;

use App\Models\Oders;
use App\Models\Orders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
           // Gán mỗi user từ 1-5 order ngẫu nhiên
           User::all()->each(function ($user) {
            Orders::factory()->count(rand(1, 5))->create([
                'user_id' => $user->id,
            ]);
        });
    }
}
