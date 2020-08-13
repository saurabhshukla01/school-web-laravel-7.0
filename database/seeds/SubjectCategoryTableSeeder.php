<?php

use Illuminate\Database\Seeder;
use App\SubjectCategory;

class SubjectCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('subjectcategories')->delete();
        $subjectcategoryRecord = [
            ['id'=>1,'subject_name'=>'Music','status'=>1],
            ['id'=>2,'subject_name'=>'Sports','status'=>1],
            ['id'=>3,'subject_name'=>'English','status'=>1],
        ];

        // DB::table('subjectcategories')->insert($eventcategoryRecoard);
        SubjectCategory::insert($subjectcategoryRecord);
    }
}
