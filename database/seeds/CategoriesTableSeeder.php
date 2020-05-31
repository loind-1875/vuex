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
                'slug' => str_slug('Hóa chất')
            ],
            [
                'name' => 'Động cơ',
                'parent_id' => null,
                'slug' => str_slug('Động cơ')
            ],
            [
                'name' => 'Phụ gia sản xuất sơn',
                'parent_id' => 1,
                'slug' => str_slug('Phụ gia sản xuất sơn')
            ],
            [
                'name' => 'Carmay',
                'parent_id' => 1,
                'slug' => str_slug('Carmay')
            ],
            [
                'name' => 'Nhũ nhôm',
                'parent_id' => 1,
                'slug' => str_slug('Nhũ nhôm')
            ],
            [
                'name' => 'Bột đồng',
                'parent_id' => 1,
                'slug' => str_slug('Bột đồng')
            ],
            [
                'name' => 'Bột màu',
                'parent_id' => 1,
                'slug' => str_slug('Bột màu')
            ],
            [
                'name' => 'Màu nhuộm',
                'parent_id' => 1,
                'slug' => str_slug('Màu nhuộm')
            ],
            [
                'name' => 'Động cơ liền vành sau',
                'parent_id' => 2,
                'slug' => str_slug('Động cơ liền vành sau')
            ],
            [
                'name' => 'Khiển xe điện',
                'parent_id' => 2,
                'slug' => str_slug('Khiển xe điện\'')
            ],
            [
                'name' => 'Phanh sau',
                'parent_id' => 2,
                'slug' => str_slug('Phanh sau')
            ],
            [
                'name' => 'Phụ kiện khác',
                'parent_id' => 2,
                'slug' => str_slug('Phụ kiện khác')
            ],
            [
                'name' => 'Phụ gia ổn định bề mặt',
                'parent_id' => 3,
                'slug' => str_slug('Phụ gia ổn định bề mặt')
            ],
            [
                'name' => 'Phụ gia chống lắng',
                'parent_id' => 3,
                'slug' => str_slug('Phụ gia chống lắng')
            ],
            [
                'name' => 'Phụ gia phân tán',
                'parent_id' => 3,
                'slug' => str_slug('Phụ gia phân tán')
            ],
            [
                'name' => 'Phụ gia tăng bám dính',
                'parent_id' => 3,
                'slug' => str_slug('Phụ gia tăng bám dính')
            ],
            [
                'name' => 'Carmay thường',
                'parent_id' => 4,
                'slug' => str_slug('Carmay thường')
            ],
            [
                'name' => 'Carmay biến sắc',
                'parent_id' => 4,
                'slug' => str_slug('Carmay biến sắc')
            ],
        ]);
    }
}
