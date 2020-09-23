<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('subjects')->count() === 0) {
            DB::table('subjects')->insert([
                [
                    'name' => 'PHP3',
                    'is_active' => 1,
                ],
                [
                    'name' => 'PHP2',
                    'is_active'=>1 ,
                ],
                [
                    'name' => 'JS',
                    // 'time' => '2020-03-03',
                    'is_active'=>1 ,
                ],
            ]);
        }else{
            echo 'Bảng Subjects đã có dữ liệu'.PHP_EOL;
        }
    }
}
