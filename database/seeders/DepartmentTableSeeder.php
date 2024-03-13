<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
            ['department_name' => 'Bogotá'],
            ['department_name' => 'Medellín'],
            ['department_name' => 'Cali'],
            ['department_name' => 'Barranquilla'],
            ['department_name' => 'Cartagena'],
            ['department_name' => 'Cúcuta'],
            ['department_name' => 'Valledupar'],
            ['department_name' => 'Bucaramanga'],
            ['department_name' => 'Pereira'],
            ['department_name' => 'Manizales'],
            ['department_name' => 'Popayán'],
            ['department_name' => 'Montería'],
            ['department_name' => 'Santa Marta'],
            ['department_name' => 'Armenia'],
            ['department_name' => 'Villavicencio'],
            ['department_name' => 'Ibagué'],
            ['department_name' => 'Neiva'],
            ['department_name' => 'Huila'],
            ['department_name' => 'Nariño'],
        ];
        
        DB::table('departments')->insert($departments);
    }
}
