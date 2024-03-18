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
            ['department_name'=>'AMAZONAS'],
            ['department_name'=>'ANTIOQUIA'],
            ['department_name'=>'ARAUCA'],
            ['department_name'=>'ATLANTICO'],
            ['department_name'=>'BOGOTA D.C'],
            ['department_name'=>'BOLIVAR'],
            ['department_name'=>'BOYACA'],
            ['department_name'=>'CALDAS'],
            ['department_name'=>'CAQUETA'],
            ['department_name'=>'CASANARE'],
            ['department_name'=>'CAUCA'],
            ['department_name'=>'CESAR'],
            ['department_name'=>'CHOCO'],
            ['department_name'=>'CORDOBA'],
            ['department_name'=>'CUNDINAMARCA'],
            ['department_name'=>'GUAINIA'],
            ['department_name'=>'GUAVIARE'],
            ['department_name'=>'HUILA'],
            ['department_name'=>'LA GUAJIRA'],
            ['department_name'=>'MAGDALENA'],
            ['department_name'=>'META'],
            ['department_name'=>'NARIÑO'],
            ['department_name'=>'NORTE DE SANTANDER'],
            ['department_name'=>'PUTUMAYO'],
            ['department_name'=>'QUINDIO'],
            ['department_name'=>'RISARALDA'],
            ['department_name'=>'SAN ANDRES Y PROVIDENCIA'],
            ['department_name'=>'SANTANDER'],
            ['department_name'=>'SUCRE'],
            ['department_name'=>'TOLIMA'],
            ['department_name'=>'VALLE DEL CAUCA'],
            ['department_name'=>'VAUPES'],
            ['department_name'=>'VICHADA'],
        ];

        DB::table('departments')->insert($departments);
    }
}
