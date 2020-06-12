<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    use MasterTableTrait;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];
        $id = 1;
        for ($i = 1; $i <= 5; $i++) {
            for ($j = 1; $j <= 30; $j++) {
                $data[] = [
                    'id' => $id,
                    'title' => 'Tặng 1 bánh pizza miễn phí cho ngày sinh nhật của bạn',
                    'description' => ' Tặng 1 pizza cỡ M (áp dụng cho tất cả các loại pizza trừ số 3, 11 và 12)',
                    'content' => "<h3>This is content</h3>",
                    'image' => 'supreme_pizza_large.jpg',
                    'article_category_id' => $i,
                    'created_at' => '2020-01-06 10:00:00',
                    'updated_at' => '2020-01-06 10:00:00',
                ];
                $id++;
            }
        }

        $this->replaceRecords('articles', $data);
    }
}
