<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category' => 'Mentai Series'
        ]);
        DB::table('categories')->insert([
            'category' => 'Katsu Series'
        ]);
        DB::table('categories')->insert([
            'category' => 'Rice Box'
        ]);
        DB::table('categories')->insert([
            'category' => 'Snack'
        ]);
        DB::table('categories')->insert([
            'category' => 'Dessert'
        ]);
        DB::table('categories')->insert([
            'category' => 'Coffee Based'
        ]);
        DB::table('categories')->insert([
            'category' => 'Latte and Friends'
        ]);
        DB::table('categories')->insert([
            'category' => 'Coffee For Another Day'
        ]);
        DB::table('categories')->insert([
            'category' => "Manual Brew"
        ]);
        DB::table('categories')->insert([
            'category' => "Don't Spill it"
        ]);
        DB::table('categories')->insert([
            'category' => "Konogawa Special Signature"
        ]);
    }
}
