<?php

use Illuminate\Database\Seeder;
use App\Entities\Blog;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Blog::class, 200)->create();
    }
}
