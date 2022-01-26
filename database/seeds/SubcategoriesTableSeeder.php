<?php

use Illuminate\Database\Seeder;

class SubcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subcategories')->insert([
            [
            'category_id' => 1,
            'subcategory_name' => '1ここにサブカテゴリー名が入ります',
            'created_at' => '2021/01/01 11:11:11',
        ],
        [
            'category_id' => 2,
            'subcategory_name' => '2ここにサブカテゴリー名が入ります',
            'created_at' => '2021/01/01 11:11:11',
        ],
        [
            'category_id' => 3,
            'subcategory_name' => '3ここにサブカテゴリー名が入ります',
            'created_at' => '2021/01/01 11:11:11',
        ],
        [
            'category_id' => 1,
            'subcategory_name' => '11ここにサブカテゴリー名が入ります',
            'created_at' => '2021/01/01 11:11:11',
        ],
        [
            'category_id' => 2,
            'subcategory_name' => '22ここにサブカテゴリー名が入ります',
            'created_at' => '2021/01/01 11:11:11',
        ],
        [
            'category_id' => 3,
            'subcategory_name' => '33ここにサブカテゴリー名が入ります',
            'created_at' => '2021/01/01 11:11:11',
        ],
        [
            'category_id' => 1,
            'subcategory_name' => '111ここにサブカテゴリー名が入ります',
            'created_at' => '2021/01/01 11:11:11',
        ],
        [
            'category_id' => 2,
            'subcategory_name' => '222ここにサブカテゴリー名が入ります',
            'created_at' => '2021/01/01 11:11:11',
        ],
        [
            'category_id' => 3,
            'subcategory_name' => '333ここにサブカテゴリー名が入ります',
            'created_at' => '2021/01/01 11:11:11',
        ],
            
            
        ]);
    }
    
}
