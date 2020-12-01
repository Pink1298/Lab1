<?php

use Illuminate\Database\Seeder;

class SanPhamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $list = [];
        $faker = Faker\Factory::create('vi_VN');
        $today = new DateTime('2020-01-01 08:00:00');
        for ($i=1; $i <= 30; $i++) {
            array_push($list, [
                'sp_ma'      => $i,
                'sp_ten'     => "sp_ten $i",
                'sp_giaGoc'  => $faker->randomFloat(2, 20000, 1000000),
                'sp_giaBan' => $i + $faker->randomFloat(2, 20000, 500000),
                'sp_hinh' => "hoa-$i.jpg",
                'sp_thongTin' => "sp_thong $i",
                'sp_danhGia' => "sp_danhGia $i",
                'sp_taoMoi' => $today->format('Y-m-d H:i:s'),
                'sp_capNhat'=> $today->format('Y-m-d H:i:s'),
                'sp_trangThai' => $faker->numberBetween(1, 2),
                'l_ma' => $faker->numberBetween(1, 9)
            ]);
        }
        DB::table('cusc_sanpham')->insert($list);
    }
}
