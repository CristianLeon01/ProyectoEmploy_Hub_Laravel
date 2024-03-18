<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['username' => 'Cristian Leon', 'id_user_types' => '3', 'email' => 'leons6362@gmail.com', 'password' => '587723242005A'],
            ['username' => 'Danna Jimenez', 'id_user_types' => '3', 'email' => 'jimenezdanna1@gmail.com', 'password' => 'danita15220.A'],
            ['username' => 'Maikol Garcia', 'id_user_types' => '2', 'email' => 'maikilop987@gmail.com', 'password' => 'maikol122wsa'],
            ['username' => 'Ronald Puerto', 'id_user_types' => '4', 'email' => 'ronitald.15@gmail.com', 'password' => 'roamldpuerto12'],
            ['username' => 'Valentina Avila', 'id_user_types' => '3', 'email' => 'valentina.12@gmail.com', 'password' => 'VaLehermoShita'],
            ['username' => 'Nicolas Barreto', 'id_user_types' => '5', 'email' => 'nicoqwe123@gmail.com', 'password' => 'misertos2dA.1'],
            ['username' => 'Brayan Capera', 'id_user_types' => '3', 'email' => 'brayan2@gmail.com', 'password' => 'elBrayan123bronx'],
            ['username' => 'Issac', 'id_user_types' => '2', 'email' => 'isacqqui123@gmail.com', 'password' => 'elIssac12wqa'],
            ['username' => 'Juan Salgado', 'id_user_types' => '4', 'email' => 'juanito8990@gmail.com', 'password' => 'juanitosXD.ws1'],
            ['username' => 'Camilo Acevedo', 'id_user_types' => '5', 'email' => 'camilin123@gmail.com', 'password' => 'phpyJava4582'],
            ['username' => 'Daniel Atara', 'id_user_types' => '3', 'email' => 'atarin258@gmail.com', 'password' => 'danialvial785'],
            ['username' => 'Sebastian', 'id_user_types' => '4', 'email' => 'sebastian.12@gmail.com', 'password' => 'microforeverAs'],
            ['username' => 'Freddy Leiva', 'id_user_types' => '4', 'email' => 'freddyfnfa@gmail.com', 'password' => 'five.niaght.freddys'],
            ['username' => 'Juanes', 'id_user_types' => '4', 'email' => 'juanitoelmascapito@gmail.com', 'password' => 'juaneselbandolREO'],
            ['username' => 'Jhan', 'id_user_types' => '4', 'email' => 'jahnelmasroncon@gmail.com', 'password' => 'foreversoccerAs96'],
            ['username' => 'Jhoana', 'id_user_types' => '2', 'email' => 'jhoana1234@gmail.com', 'password' => 'narutoForever.XD'],
            ['username' => 'Diego Capera', 'id_user_types' => '5', 'email' => 'dieguitocapera@gmail.com', 'password' => 'capeñaforever123daas'],
            ['username' => 'Peter Bustamante', 'id_user_types' => '4', 'email' => 'peter.busta.picture@gmail.com', 'password' => 'pitorsoyte1321'],
            ['username' => 'Diego Carranza', 'id_user_types' => '2', 'email' => 'carranzatetos@gmail.com', 'password' => 'foreverlasGordas.123'],
            ['username' => 'William Lozano', 'id_user_types' => '3', 'email' => 'willimaLozano@gmail.com', 'password' => 'P3nd3j0.123']
        ];

        DB::table('users')->insert($users);
    }
}
