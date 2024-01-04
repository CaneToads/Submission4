<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuestbookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('guestbook')->insert([
            'name' => 'Joni',
            'from' => 'Cimahi',
            'agenda' => 'Tamu Khusus',
        ]);
    }
}
