<?php

use Illuminate\Database\Seeder;

class BrandTableSeeder extends Seeder
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
                'name' => 'KAFF',
                'description' => 'description',
                'alias' => 'kaff',
                'image' => 'kfc-192020.png',

            ],
            [
                'id' => 2,
                'name' => 'BOSCH',
                'description' => 'description',
                'alias' => 'bosch',
                'image' => 'kfc-192020.png',
            ],
            [
                'id' => 3,
                'name' => 'GIOVANI',
                'description' => 'description',
                'alias' => 'giovani',
                'image' => 'kfc-192020.png',

            ],
            [
                'id' => 4,
                'name' => 'CANZY',
                'description' => 'description',
                'alias' => 'canzy',
                'image' => 'kfc-192020.png',

            ],
            [
                'id' => 5,
                'name' => 'Sika',
                'description' => 'description',
                'alias' => 'sika',
                'image' => 'kfc-192020.png',
            ],
            [
                'id' => 6,
                'name' => 'Pramie',
                'description' => 'description',
                'alias' => 'pramie',
                'image' => 'kfc-192020.png',
            ],
            [
                'id' => 7,
                'name' => 'CHEFS',
                'description' => 'description',
                'alias' => 'chefs',
                'image' => 'kfc-192020.png',
            ],
            [
                'id' => 8,
                'name' => 'CATA',
                'description' => 'description',
                'alias' => 'cata',
                'image' => 'kfc-192020.png',
            ],
            [
                'id' => 9,
                'name' => 'MUNCHEN',
                'description' => 'description',
                'alias' => 'munchen',
                'image' => 'kfc-192020.png',
            ],
            [
                'id' => 10,
                'name' => 'FAGOR',
                'description' => 'description',
                'alias' => 'fagor',
                'image' => 'kfc-192020.png',
            ],
            [
                'id' => 11,
                'name' => 'FASTER',
                'description' => 'description',
                'alias' => 'faster',
                'image' => 'kfc-192020.png',
            ],
            [
                'id' => 12,
                'name' => 'FANDY',
                'description' => 'description',
                'alias' => 'faster',
                'image' => 'kfc-192020.png',
            ],

        ];
        $this->replaceRecords('brands', $data);
    }
}
