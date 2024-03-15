<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            ['city_name' => 'Bogotá', 'department_id' => 1],
            ['city_name' => 'Medellín', 'department_id' => 2],
            ['city_name' => 'Cali', 'department_id' => 3],
            ['city_name' => 'Barranquilla', 'department_id' => 4],
            ['city_name' => 'Cartagena', 'department_id' => 5],
            ['city_name' => 'Cúcuta', 'department_id' => 6],
            ['city_name' => 'Valledupar', 'department_id' => 7],
            ['city_name' => 'Bucaramanga', 'department_id' => 8],
            ['city_name' => 'Pereira', 'department_id' => 9],
            ['city_name' => 'Manizales', 'department_id' => 10],
            ['city_name' => 'Popayán', 'department_id' => 11],
            ['city_name' => 'Montería', 'department_id' => 12],
            ['city_name' => 'Santa Marta', 'department_id' => 13],
            ['city_name' => 'Armenia', 'department_id' => 14],
            ['city_name' => 'Villavicencio', 'department_id' => 15],
            ['city_name' => 'Ibagué', 'department_id' => 16],
            ['city_name' => 'Neiva', 'department_id' => 17],
            ['city_name' => 'Huila', 'department_id' => 18],
            ['city_name' => 'Nariño', 'department_id' => 19],
        ];
        
        DB::table('cities')->insert($cities);
    }
}
