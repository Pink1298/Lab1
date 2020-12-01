<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(LoaiTableSeeder::class);
        $this->call(ThanhToanTableSeeder::class);
        $this->call(SanPhamTableSeeder::class);
        $this->call(KhachHangTableSeeder::class);
        $this->call(NhanVienTableSeeder::class);
        
    }
}
