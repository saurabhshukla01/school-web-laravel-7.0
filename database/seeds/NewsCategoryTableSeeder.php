<?php

use Illuminate\Database\Seeder;
use App\NewsCategory;

class NewsCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newscategoryRecoard = [
            ['id'=>1,'name'=>'Music','status'=>1],
        	['id'=>2,'name'=>'Sports','status'=>1],
        ];

        // DB::table('eventcategories')->insert($eventcategoryRecoard);
        NewsCategory::insert($newscategoryRecoard);
    }
}
