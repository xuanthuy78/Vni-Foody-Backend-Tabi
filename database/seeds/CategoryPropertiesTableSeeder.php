<?php

use Illuminate\Database\Seeder;

class CategoryPropertiesTableSeeder extends Seeder
{
    use MasterTableTrait;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'category_id' => 1,
                'key' => 'is_show_menu',
                'value' => 1
            ],
            [
                'id' => 2,
                'category_id' => 4,
                'key' => 'is_show_menu',
                'value' => 1
            ],
            [
                'id' => 3,
                'category_id' => 7,
                'key' => 'is_show_menu',
                'value' => 1
            ],
            [
                'id' => 4,
                'category_id' => 1,
                'key' => 'is_feature',
                'value' => 1
            ],
            [
                'id' => 5,
                'category_id' => 4,
                'key' => 'is_feature',
                'value' => 1
            ],
            [
                'id' => 6,
                'category_id' => 7,
                'key' => 'is_feature',
                'value' => 1
            ],
            [
                'id' => 7,
                'category_id' => 1,
                'key' => 'is_show_home_page',
                'value' => 1
            ],
            [
                'id' => 8,
                'category_id' => 4,
                'key' => 'is_show_home_page',
                'value' => 1
            ],
            [
                'id' => 9,
                'category_id' => 7,
                'key' => 'is_show_home_page',
                'value' => 1
            ],
        ];

        $this->replaceRecords('category_properties', $data);
    }
}
