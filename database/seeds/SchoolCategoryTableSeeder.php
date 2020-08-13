<?php

use Illuminate\Database\Seeder;
use App\SchoolCategory;

class SchoolCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $schoolcategoryRecord = [
            ['id'=>1,'school_category'=>'Music','status'=>1],
            ['id'=>2,'school_category'=>'Sports','status'=>1],
            ['id'=>3,'school_category'=>'English','status'=>1],
        ];

        SchoolCategory::insert($schoolcategoryRecord);
    }
}
