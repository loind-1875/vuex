<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'Hóa chất',
            'Động cơ',
        ];

        foreach ($data as $item) {
            Category::create([
                'slug' => str_slug($item),
            ]);
        }

        DB::table('category_translations')->insert([
            [
                'category_id' => 1,
                'name' => 'Hóa chất',
                'locale' => 'vi',
            ],
            [
                'category_id' => 1,
                'name' => 'Chemistry',
                'locale' => 'en',
            ],
            [
                'category_id' => 1,
                'name' => '化学',
                'locale' => 'cn',
            ],
            [
                'category_id' => 2,
                'name' => 'Động cơ',
                'locale' => 'vi',
            ],
            [
                'category_id' => 2,
                'name' => 'Engine',
                'locale' => 'en',
            ],
            [
                'category_id' => 2,
                'name' => '发动机',
                'locale' => 'cn',
            ],
        ]);
    }
}
