<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class OrderTableSeeder extends Seeder
{
    use MasterTableTrait;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $dataInsert = [];
        for ($i = 0 ; $i <= 120 ;$i++) {
            $dataInsert[] = [
                'id'=>$i,
                'name'=>$faker->name,
                'gender'=>1,
                'email'=>$faker->email,
                'phone'=>$faker->phoneNumber,
                'address'=>$faker->address,
                'description'=>$faker->word,
                'status'=>$faker->numberBetween(0,2),
                'total'=>15000000,
                'created_at' =>date('Y-m-d H:i:s' ),
                'updated_at'=>$faker->date(),
            ];
        }
        $this->replaceRecords('orders', $dataInsert);
    }
}
