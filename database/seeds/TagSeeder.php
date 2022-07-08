<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create(['name' => 'front-end']);
        Tag::create(['name' => 'back-end']);
        Tag::create(['name' => 'reactjs']);
        Tag::create(['name' => 'javascript']);
        Tag::create(['name' => 'angular']);
        Tag::create(['name' => 'php']);
        Tag::create(['name' => 'servidores']);
        Tag::create(['name' => 'node']);
        Tag::create(['name' => 'diseño']);
        Tag::create(['name' => 'fotografía']);
    }
}
