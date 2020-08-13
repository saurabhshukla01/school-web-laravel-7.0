<?php

use Illuminate\Database\Seeder;
use App\Gallary;

class GallaryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gallaryRecord = [
            ['id'=>1,'school_category_id'=>1,'image_title'=>'Gallary','status'=>1],
            ['id'=>2,'school_category_id'=>2,'image_title'=>'Gallary Test Here','status'=>1],
            ['id'=>3,'school_category_id'=>4,'image_title'=>'Gallary Enumation','status'=>1],
        ];

        Gallary::insert($gallaryRecord);
    }
}
