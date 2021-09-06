<?php

use Illuminate\Database\Seeder;

class PublishingCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publishing_companys')->insert([

            [
                'title'  => 'Đại học quốc gia',
                'note'   => 'Mô tả'
            ],
            [
                'title'  => 'Đại học sư phạm',
                'note'   => 'Mô tả'
            ],
            [
                'title'  => 'Bộ Giáo dục và Đào tạo',
                'note'   => 'Mô tả'
            ],
            [
                'title'  => 'Trường Đại học Tài nguyên và Môi trường Hà Nội',
                'note'   => 'Mô tả'
            ],
            [
                'title'  => 'Đại học công nghệ',
                'note'   => 'Mô tả'
            ],

        ]);
    }
}
