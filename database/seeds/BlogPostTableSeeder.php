<?php

use Illuminate\Database\Seeder;
use App\BlogPost;

class BlogPostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $count = 100;

        factory(BlogPost::class, $count)->create();
    }
}
