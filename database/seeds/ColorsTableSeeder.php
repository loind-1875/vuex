<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert([
            [
                'name' => 'Đỏ',
                'color_code' => '#d92027',
            ],
            [
                'name' => 'Xanh dương',
                'color_code' => '#5fdde5',
            ],
            [
                'name' => 'Xanh lá cây',
                'color_code' => '79d70f',
            ],
            [
                'name' => 'Tím',
                'color_code' => 'd291bc',
            ],
            [
                'name' => 'Vàng',
                'color_code' => 'fcf876',
            ],
            [
                'name' => 'Aqua',
                'color_code' => '43d8c9',
            ],
            [
                'name' => 'Đen',
                'color_code' => '272727',
            ],

            [
                'name' => 'Trắng',
                'color_code' => 'ffffff',
            ],
        ]);
    }
}
