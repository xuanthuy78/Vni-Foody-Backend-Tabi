<?php

use Illuminate\Database\Seeder;

class ProductImagesTableSeeder extends Seeder
{
    use MasterTableTrait;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataInsert = [];
        $id = 0;
        for ($i = 1; $i <= 120; $i++) {

            for($j = $i ; $j <= $i + 5; $j++) {
                $id += $j + $i;
                $dataInsert[] = [
                    'id' => $id,
                    'product_id' => $i,
                    'image' => 'xa-lach-gcf126-405.jpg'
                ];
            }

        }

        $this->replaceRecords('product_images', $dataInsert);
    }
}
