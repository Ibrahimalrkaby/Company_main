<?php

namespace Database\Seeders;

use App\Models\Message;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Message::updateOrCreate(['email' => 'user@user.com'], [
            'name' => 'user',
            'title' => 'ajdfo asdfaoij',
            'message' => 'jdisfja asdfoij jsadifj jdsaj',

        ]);
    }
}
