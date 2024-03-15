<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminUser = [
            'username' => 'AdminCide',
            'email' => 'admincide@example.com',
            'password' => Hash::make('Cide899999034-1'),
            'id_user_types' => 1,
        ];

        User::create($adminUser);
    }
}
