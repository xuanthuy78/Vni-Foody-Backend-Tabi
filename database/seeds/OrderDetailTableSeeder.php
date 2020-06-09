<?php

use Illuminate\Database\Seeder;

class OrderDetailTableSeeder extends Seeder
{
    use MasterTableTrait;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0 ; $i <= 200 ;$i++) {
            $dataInsert[] = [
                'id'=>$i,
                'product_id'=>1,
                'price'=>15000000,
                'order_id'=>$i,
                'number'=>2,
                'created_at'=>'2020-01-06 10:00:00',
                'updated_at'=>'2020-01-06 10:00:00'

            ];
        }
        $this->replaceRecords('order_details', $dataInsert);
    }
}
