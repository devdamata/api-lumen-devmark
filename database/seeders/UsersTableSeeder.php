<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $level = UserLevel::where('level', 'admin')->first();
        User::create([
            'name' => 'Anderson da Mata Pereira',
            'email' => 'anderson.daamata@gmail.com',
            'password' => app('hash')->make('123456'),
            'user_level_id' => $level->id,
            'deleted' => null,
            'deleted_at' => null
        ]);
    }
}
