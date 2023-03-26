<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news')->insert([
            'img_src' => '/images/placeholder.jpg',
            'title' => 'Post 1',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis pharetra odio, sit amet vehicula metus. Aenean sagittis nisl quis orci mattis, ut commodo purus pretium. Proin ullamcorper nunc ut mollis pulvinar. Donec id elementum erat. Vivamus vehicula tortor iaculis convallis consequat. Nulla sed posuere enim. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed porttitor felis dolor, id dapibus nulla porttitor non.',
        ]);
    }
}
