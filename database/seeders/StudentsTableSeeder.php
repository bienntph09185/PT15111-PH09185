<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

// Use DB  để có thể sử dụng các phương thức trong đó
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // if (DB::table('students')->count() === 0) {
            DB::table('students')->insert([
                [
                    'name' => 'Nguyễn Công Nga',
                    'phone' => '0123456789',
                    'age' => 14,
                    'gender' => 1,
                    'address' => 'Trịnh Văn Bô',
                    'is_active' => 1,
                ],
                [
                    'name' => 'Nguyễn Hồng Quân',
                    'phone' => '0123456789',
                    'gender' => 1,
                    'age' => 14,
                    'address' => 'Trịnh Văn Bô',
                    'is_active' => 1,

                
                ],
            ]);
        // }else{
        //     echo 'Bảng Students đã có dữ liệu'.PHP_EOL;
        // }
    }
}
