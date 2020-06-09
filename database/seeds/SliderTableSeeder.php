<?php

use Illuminate\Database\Seeder;

class SliderTableSeeder extends Seeder
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
                'name' => 'slide 1',
                'image' => 'slider-1.png',
                'order' => 1
            ],
            [
                'id' => 2,
                'name' => 'slide 2',
                'image' => 'slider-2.png',
                'order' => 2
            ]
        ];
        $this->replaceRecords('sliders', $data);
    }
}
