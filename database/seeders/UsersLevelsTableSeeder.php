<?php

namespace Database\Seeders;

use App\Models\UserLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersLevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserLevel::creating([
            'level' => 'admin'
        ]);
        UserLevel::creating([
            'level' => 'client'
        ]);
    }
}
