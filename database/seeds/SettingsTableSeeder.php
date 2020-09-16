<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->truncate();
        DB::table('setting_translations')->truncate();
        
        DB::table('settings')->insert([
            [
                'key' => 'company_name',
                'value' => NULL,
            ],
            [
                'key' => 'about',
                'value' => NULL,
            ],
            [
                'key' => 'logo',
                'value' => NULL,
            ],
            [
                'key' => 'favicon',
                'value' => NULL,
            ],
            [
                'key' => 'email',
                'value' => NULL,
            ],
            [
                'key' => 'phone',
                'value' => NULL,
            ],
            [
                'key' => 'banner1',
                'value' => NULL,
            ],
            [
                'key' => 'banner2',
                'value' => NULL,
            ],
        ]);

        DB::table('setting_translations')->insert([
            [
                'setting_id' => 1,
                'locale' => 'vi',
                'value' => NULL,
            ],
            [
                'setting_id' => 1,
                'locale' => 'en',
                'value' => NULL,
            ],
            [
                'setting_id' => 1,
                'locale' => 'cn',
                'value' => NULL,
            ],
            [
                'setting_id' => 2,
                'locale' => 'vi',
                'value' => NULL,
            ],
            [
                'setting_id' => 2,
                'locale' => 'en',
                'value' => NULL,
            ],
            [
                'setting_id' => 2,
                'locale' => 'cn',
                'value' => NULL,
            ],
        ]);
    }
}
