<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
            
            'category_name' => '1ここにカテゴリー名が入ります',
            'created_at' => '2021/01/01 11:11:11',
            ],
            [
               
                'category_name' => '2ここにカテゴリー名が入ります',
                'created_at' => '2021/01/01 11:11:11',
            ],
            [
                
                'category_name' => '3ここにカテゴリー名が入ります',
                'created_at' => '2021/01/01 11:11:11',
            ],
            [
                
                'category_name' => '4ここにカテゴリー名が入ります',
                'created_at' => '2021/01/01 11:11:11',
            ],
            [
                
                'category_name' => '5ここにカテゴリー名が入ります',
                'created_at' => '2021/01/01 11:11:11',
            ],
            
        ]);
    }
}
