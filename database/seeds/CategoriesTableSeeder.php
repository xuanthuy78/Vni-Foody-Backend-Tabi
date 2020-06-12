<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
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
                'name' => 'THỰC ĐƠN CHÍNH',
                'image' => 'cate.jpg',
                'description' => 'THỰC ĐƠN CHÍNH',
                '_lft' => 1,
                '_rgt' => 6,
            ],
            [
                'id' => 2,
                'name' => 'Món khai vị',
                'parent_id' => 1,
                '_lft' => 2,
                '_rgt' => 3,

            ],
            [
                'id' => 3,
                'name' => 'Pizza',
                'parent_id' => 1,
                '_lft' => 4,
                '_rgt' => 5,

            ],
            [
                'id' => 4,
                'name' => 'THỰC ĐƠN ĐẶC BIỆT',
                'image' => 'cate.jpg',
                'description' => 'thực đơn đặc biệt',
                '_lft' => 7,
                '_rgt' => 12,
            ],
            [
                'id' => 5,
                'name' => 'Kệ tivi',
                'parent_id' => 4,
                '_lft' => 8,
                '_rgt' => 9,

            ],
            [
                'id' => 6,
                'name' => 'Bàn trà',
                'parent_id' => 4,
                '_lft' => 10,
                '_rgt' => 11,

            ],
            [
                'id' => 7,
                'name' => 'PHÒNG BẾP',
                'image' => 'cate.jpg',
                'description' => 'Hiện nay, nội thất phòng khách là vấn đề rất nhiều gia đình quan tâm. Từ những đôi vợ chồng trẻ đến những gia đình đã có cuộc sống ổn đinh. Việc thay đổi nội thất phòng khách vẫn rất được chú trọng. Chỉ với bộ sofa và kệ tivi đã có thể làm nên một phòng khách đẹp và sang trọng.',
                '_lft' => 13,
                '_rgt' => 17,
            ],
            [
                'id' => 8,
                'name' => 'Bàn ghế ăn',
                'parent_id' => 7,
                '_lft' => 14,
                '_rgt' => 15,

            ],
            [
                'id' => 9,
                'name' => 'Tủ bếp',
                'parent_id' => 7,
                '_lft' => 16,
                '_rgt' => 21,

            ],
            [
                'id' => 10,
                'name' => 'Tủ bếp hiện đại',
                'parent_id' => 9,
                '_lft' => 17,
                '_rgt' => 18,

            ],
            [
                'id' => 11,
                'name' => 'Tủ bếp truyền thống',
                'parent_id' => 9,
                '_lft' => 19,
                '_rgt' => 20,
            ],
        ];
        $this->replaceRecords('categories', $data);
    }
}
