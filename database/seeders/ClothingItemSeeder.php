<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ClothingItem;

class ClothingItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ClothingItem::insert([
            [
                'name' => 'Classic T-Shirt',
                'category' => 'Tops',
                'brand' => 'Nike',
                'size' => 'M',
                'image' => 'tshirt.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Denim Jeans',
                'category' => 'Bottoms',
                'brand' => 'Levi’s',
                'size' => '32',
                'image' => 'jeans.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Running Shoes',
                'category' => 'Shoes',
                'brand' => 'Adidas',
                'size' => '9',
                'image' => 'shoes.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
