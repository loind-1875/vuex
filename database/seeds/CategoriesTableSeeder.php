<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Hóa chất',
                'parent_id' => null,
            ],
            [
                'name' => 'Động cơ',
                'parent_id' => null,
            ],
            [
                'name' => 'Phụ gia sản xuất sơn',
                'parent_id' => 1,
            ],
            [
                'name' => 'Carmay',
                'parent_id' => 1,
            ],
            [
                'name' => 'Nhũ nhôm',
                'parent_id' => 1,
            ],
            [
                'name' => 'Bột đồng',
                'parent_id' => 1,
            ],
            [
                'name' => 'Bột màu',
                'parent_id' => 1,
            ],
            [
                'name' => 'Màu nhuộm',
                'parent_id' => 1,
            ],
            [
                'name' => 'Động cơ liền vành sau',
                'parent_id' => 2,
            ],
            [
                'name' => 'Khiển xe điện',
                'parent_id' => 2,
            ],
            [
                'name' => 'Phanh sau',
                'parent_id' => 2,
            ],
            [
                'name' => 'Phụ kiện khác',
                'parent_id' => 2,
            ],
            [
                'name' => 'Phụ gia ổn định bề mặt',
                'parent_id' => 3,
            ],
            [
                'name' => 'Phụ gia chống lắng',
                'parent_id' => 3,
            ],
            [
                'name' => 'Phụ gia phân tán',
                'parent_id' => 3,
            ],
            [
                'name' => 'Phụ gia tăng bám dính',
                'parent_id' => 3,
            ],
            [
                'name' => 'Carmay thường',
                'parent_id' => 4,
            ],
            [
                'name' => 'Carmay biến sắc',
                'parent_id' => 4,
            ],
        ]);
    }
}
