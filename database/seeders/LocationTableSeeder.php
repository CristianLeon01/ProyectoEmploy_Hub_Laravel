<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $localities =[

            ['location_name'=> 'Bogotá'],
            ['location_name'=> 'Medellín'],
            ['location_name'=> 'Cali'],
            ['location_name'=> 'Barranquilla'],
            ['location_name'=> 'Cartagena'],
            ['location_name'=> 'Cúcuta'],
            ['location_name'=> 'Valledupar'],
            ['location_name'=> 'Bucaramanga'],
            ['location_name'=> 'Pereira'],
            ['location_name'=> 'Manizales'],
            ['location_name'=> 'Popayán'],
            ['location_name'=> 'Montería'],
            ['location_name'=> 'Santa Marta'],
            ['location_name'=> 'Armenia'],
            ['location_name'=> 'Villavicecio'],
            ['location_name'=> 'Ibagué'],
            ['location_name'=> 'Neiva'],
            ['location_name'=> 'Pasto'],
        ];

        DB::table('localities')->insert($localities);
    }
}
