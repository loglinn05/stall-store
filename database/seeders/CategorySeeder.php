<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            "title" => "Тактичне спорядження"
        ]);
        Category::create([
            "title" => "Оригінальні подарунки"
        ]);
        Category::create([
            "title" => "Аксесуари для гаджетів"
        ]);
        Category::create([
            "title" => "Товари для дому"
        ]);
    }
}
