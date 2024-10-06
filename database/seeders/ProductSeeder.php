<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    private $productService;

    public function __construct()
    {
        $this->productService = new ProductService;
    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->productService->createProduct([
            "title" => "Захисні тактичні окуляри з кріпленням до шолома",
            "price" => 995,
            "image_url" => "product_images/image_test_1.jpg",
            "category_title" => "Тактичне спорядження"
        ]);
        sleep(3);

        $this->productService->createProduct([
            "title" => "Підсумок на пояс для пістолета",
            "price" => 485,
            "image_url" => "product_images/image_test_2.jpg",
            "category_title" => "Тактичне спорядження"
        ]);
        sleep(3);

        $this->productService->createProduct([
            "title" => "Фоторамка левітуюча з LED підсвічуванням",
            "price" => 2820,
            "image_url" => "product_images/image_test_3.jpg",
            "category_title" => "Оригінальні подарунки"
        ]);
        sleep(3);

        $this->productService->createProduct([
            "title" => "Чашка Гра Престолів (Game of Thrones) на 600 мл",
            "price" => 1070,
            "image_url" => "product_images/image_test_4.jpg",
            "category_title" => "Оригінальні подарунки"
        ]);
        sleep(3);

        $this->productService->createProduct([
            "title" => "Зовнішня USB звукова карта 7.1 Palmexx",
            "price" => 175,
            "old_price" => 220,
            "image_url" => "product_images/image_test_5.jpg",
            "category_title" => "Аксесуари для гаджетів"
        ]);
        sleep(3);

        $this->productService->createProduct([
            "title" => "Подарунковий набір домашнього бармена 23 в 1",
            "price" => 4290,
            "image_url" => "product_images/image_test_6.jpg",
            "category_title" => "Товари для дому"
        ]);
    }
}
