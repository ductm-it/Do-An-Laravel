<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category')->insert([
            'id'=>1,
            'categoryName'=>'Sandal',
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table('category')->insert([
            'id'=>2,
            'categoryName'=>'Sneaker',
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table('category')->insert([
            'id'=>3,
            'categoryName'=>'Giày Lười',
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table('category')->insert([
            'id'=>4,
            'categoryName'=>'Giày nam',
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    }
}