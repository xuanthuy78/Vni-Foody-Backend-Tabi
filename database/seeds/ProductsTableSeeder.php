<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    use MasterTableTrait;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        $description = "Món salad Nga luôn tươi ngon và hấp dẫn những ai thưởng thức.";
        $content = "<h2>This is content</h2>";
        $dataInsert = [];
        for ($i = 1; $i <= 20; $i++) {
            $dataInsert[] = [
                'id' => $i,
                'name' =>  "Xà lách trộn kiểu Nga$i",
                'alias' => "xa-lach-tron-kieu-nga$i",
                'code' => "XL-233",
                'category_id' => 2,
                'price' => 32000000,
                'promotion_price' => 15000000,
                'quality' => 23,
                'description' => $description,
                'content' => $content,
                'thumbnail'=>'xa-lach-gcf126-405.jpg'

            ];
        }

        for ($i = 21; $i <= 40; $i++) {
            $dataInsert[] = [
                'id' => $i,
                'name' =>  "Xà lách trộn kiểu Nga$i",
                'alias' => "xa-lach-tron-kieu-nga$i",
                'code' => "XL-233",
                'category_id' => 3,
                'price' => 32000000,
                'promotion_price' => 15000000,
                'quality' => 23,
                'description' => $description,
                'content' => $content,
                'thumbnail'=>'xa-lach-gcf126-405.jpg'

            ];
        }

        for ($i = 41; $i <= 60; $i++) {
            $dataInsert[] = [
                'id' => $i,
                'name' =>  "Xà lách trộn kiểu Nga$i",
                'alias' => "xa-lach-tron-kieu-nga$i",
                'code' => "XL-233",
                'category_id' => 5,
                'price' => 12000000,
                'promotion_price' => 18000000,
                'quality' => 23,
                'description' => $description,
                'content' => $content,
                'thumbnail'=>'xa-lach-gcf126-405.jpg'

            ];
        }

        for ($i = 61; $i <= 80; $i++) {
            $dataInsert[] = [
                'id' => $i,
                'name' =>  "Xà lách trộn kiểu Nga$i",
                'alias' => "xa-lach-tron-kieu-nga$i",
                'code' => "XL-233",
                'category_id' => 6,
                'price' => 12000000,
                'promotion_price' => 18000000,
                'quality' => 23,
                'description' => $description,
                'content' => $content,
                'thumbnail'=>'xa-lach-gcf126-405.jpg'
            ];
        }

        for ($i = 81; $i <= 100; $i++) {
            $dataInsert[] = [
                'id' => $i,
                'name' =>  "Xà lách trộn kiểu Nga$i",
                'alias' => "xa-lach-tron-kieu-nga$i",
                'code' => "XL-233",
                'category_id' => 10,
                'price' => 12000000,
                'promotion_price' => 18000000,
                'quality' => 23,
                'description' => $description,
                'content' => $content,
                'thumbnail'=>'xa-lach-gcf126-405.jpg'

            ];
        }

        for ($i = 101; $i <= 120; $i++) {
            $dataInsert[] = [
                'id' => $i,
                'name' =>  "Xà lách trộn kiểu Nga$i",
                'alias' => "xa-lach-tron-kieu-nga$i",
                'code' => "XL-233",
                'category_id' => 11,
                'price' => 12000000,
                'promotion_price' => 18000000,
                'quality' => 23,
                'description' => $description,
                'content' => $content,
                'thumbnail'=>'xa-lach-gcf126-405.jpg'
            ];
        }

        $this->replaceRecords('products', $dataInsert);
    }
}
