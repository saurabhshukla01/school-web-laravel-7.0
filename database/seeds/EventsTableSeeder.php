<?php

use Illuminate\Database\Seeder;
use App\Event;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $eventsRecoard = [
            ['id'=>1,'event_title'=>'Music Student data','event_category'=>1,'event_location'=>'Dehli','status'=>1],
            ['id'=>2,'event_title'=>'Music Student data here','event_category'=>2,'event_location'=>'Dehli','status'=>1],
        ];

        // DB::table('events')->insert($eventcategoryRecoard);
        Event::insert($eventsRecoard);
    }
}
