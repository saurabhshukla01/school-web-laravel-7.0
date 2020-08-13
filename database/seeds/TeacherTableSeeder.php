<?php

use Illuminate\Database\Seeder;
use App\Staff;

class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teacherRecord = [
            ['id'=>1,'teacher_name'=>'ABC','teacher_email'=>'abc@gmail.com','subject_category'=>1,'status'=>1],
            ['id'=>2,'teacher_name'=>'XYZ','teacher_email'=>'xyz@gmail.com','subject_category'=>2,'status'=>1],
            ['id'=>3,'teacher_name'=>'LMN','teacher_email'=>'lmn@gmail.com','subject_category'=>3,'status'=>1],

        ];

        Staff::insert($teacherRecord);
    }
}
