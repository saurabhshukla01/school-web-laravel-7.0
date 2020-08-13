<?php

use Illuminate\Database\Seeder;
use App\EventCategory;

class EventCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('eventcategories')->delete();
        $eventcategoryRecord = [
            ['id'=>5,'name'=>'Music','status'=>1],
        	['id'=>6,'name'=>'Sports','status'=>1],
            ['id'=>7,'name'=>'Playing Car','status'=>1]
        ];

        // DB::table('eventcategories')->insert($eventcategoryRecoard);
        EventCategory::insert($eventcategoryRecord);
    }
}
