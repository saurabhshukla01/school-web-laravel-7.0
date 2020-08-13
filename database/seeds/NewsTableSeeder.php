<?php

use Illuminate\Database\Seeder;
use App\News;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newsRecord = [
            ['id'=>1,'news_title'=>'Music Student data','news_category'=>1,'news_image'=>'','status'=>1],
            ['id'=>2,'news_title'=>'Music Student data here','news_category'=>1,'news_image'=>'','status'=>1],
        ];

        News::insert($newsRecord);
    }
}
