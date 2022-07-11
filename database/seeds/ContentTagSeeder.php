<?php

use Illuminate\Database\Seeder;
use App\ContentTag;

class ContentTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContentTag::create(['content_id' => 1, 'tag_id' => 1]);
        ContentTag::create(['content_id' => 1, 'tag_id' => 3]);
        ContentTag::create(['content_id' => 1, 'tag_id' => 4]);
        ContentTag::create(['content_id' => 2, 'tag_id' => 1]);
        ContentTag::create(['content_id' => 2, 'tag_id' => 4]);
        ContentTag::create(['content_id' => 2, 'tag_id' => 5]);
        ContentTag::create(['content_id' => 3, 'tag_id' => 1]);
        ContentTag::create(['content_id' => 3, 'tag_id' => 4]);
        ContentTag::create(['content_id' => 4, 'tag_id' => 2]);
        ContentTag::create(['content_id' => 4, 'tag_id' => 6]);
        ContentTag::create(['content_id' => 4, 'tag_id' => 7]);
        ContentTag::create(['content_id' => 5, 'tag_id' => 2]);
        ContentTag::create(['content_id' => 5, 'tag_id' => 7]);
        ContentTag::create(['content_id' => 5, 'tag_id' => 8]);
        ContentTag::create(['content_id' => 6, 'tag_id' => 9]);
        ContentTag::create(['content_id' => 6, 'tag_id' => 10]);
    }
}
