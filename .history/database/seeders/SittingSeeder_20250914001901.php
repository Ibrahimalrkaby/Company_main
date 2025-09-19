<?php

namespace Database\Seeders;

use App\Models\sitting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SittingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        sitting::updateOrCreate(['id' => '1'], [
            'address' => 'Address 1',
            'Phone' => '0103313213',
            'facebook' => 'jsajfaihasdf',
            'twitter' => '1',
            'youtube' => '1',
            'instagram' => '1',
            'linkedin' => '1'
        ]);
    }
}
