<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_types = [
            ['user_type_name' => 'ADMIN'],
            ['user_type_name' => 'SELECTOR'],
            ['user_type_name' => 'RECRUITER'],
            ['user_type_name' => 'CANDIDATE'],
            ['user_type_name' => 'COMPANY']
        ];

        DB::table('user_types')->insert($user_types);
        
    }
}