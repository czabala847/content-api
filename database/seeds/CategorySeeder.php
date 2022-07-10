<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'Frontend', 'description' => 'Parte visual web o aplicación.', 'image' => '/images/category/frontend.png']);
        Category::create(['name' => 'Backend', 'description' => 'Lado del servidor.', 'image' => '/images/category/backend.png']);
        Category::create(['name' => 'Diseño gráfico', 'description' => 'Comunicaciones visuales destinadas a transmitir mensajes.', 'image' => '/images/category/design.png']);
        Category::create(['name' => 'Big Data', 'description' => 'Conjuntos de datos tan grandes y complejos.', 'image' => '/images/category/data.png']);
    }
}
