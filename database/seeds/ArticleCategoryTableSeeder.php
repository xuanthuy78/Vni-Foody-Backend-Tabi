<?php

use Illuminate\Database\Seeder;

class ArticleCategoryTableSeeder extends Seeder
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
                'name' => 'Chuyên đề nội thất',
                'alias' => 'chuyen-de-noi-that'
            ],
            [
                'id' => 2,
                'name' => 'Trang trí nhà đẹp',
                'alias' => 'trang-tri-nha-dep'
            ],
            [
                'id' => 3,
                'name' => 'Khuyến mãi',
                'alias' => 'khuyen-mai'
            ],
            [
                'id' => 4,
                'name' => 'Tuyển dụng',
                'alias' => 'tuyen-dung'
            ],
            [
                'id' => 5,
                'name' => 'Dự án tiêu biểu',
                'alias' => 'du-an-tieu-bieu'
            ],
        ];
        $this->replaceRecords('article_categories', $data);
    }
}
