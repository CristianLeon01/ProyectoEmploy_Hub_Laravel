<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $municipalities = [

            //Muncipios de Cundinamarca
            ['municipality_name' => 'Agua de Dios', 'department_id'=>'15'],
            ['municipality_name' => 'Albán', 'department_id'=>'15'],
            ['municipality_name' => 'Anapoima', 'department_id'=>'15'],
            ['municipality_name' => 'Anolaima', 'department_id'=>'15'],
            ['municipality_name' => 'Apulo', 'department_id'=>'15'],
            ['municipality_name' => 'Arbeláez', 'department_id'=>'15'],
            ['municipality_name' => 'Beltrán', 'department_id'=>'15'],
            ['municipality_name' => 'Bituima', 'department_id'=>'15'],
            ['municipality_name' => 'Bojacá', 'department_id'=>'15'],
            ['municipality_name' => 'Cabrera', 'department_id'=>'15'],
            ['municipality_name' => 'Cachipay', 'department_id'=>'15'],
            ['municipality_name' => 'Cajicá', 'department_id'=>'15'],
            ['municipality_name' => 'Caparrapí', 'department_id'=>'15'],
            ['municipality_name' => 'Cáqueza', 'department_id'=>'15'],
            ['municipality_name' => 'Carmen de Carupa', 'department_id'=>'15'],
            ['municipality_name' => 'Chaguaní', 'department_id'=>'15'],
            ['municipality_name' => 'Chía', 'department_id'=>'15'],
            ['municipality_name' => 'Chipaque', 'department_id'=>'15'],
            ['municipality_name' => 'Choachí', 'department_id'=>'15'],
            ['municipality_name' => 'Chocontá', 'department_id'=>'15'],
            ['municipality_name' => 'Cogua', 'department_id'=>'15'],
            ['municipality_name' => 'Cota', 'department_id'=>'15'],
            ['municipality_name' => 'Cucunubá', 'department_id'=>'15'],
            ['municipality_name' => 'El Colegio', 'department_id'=>'15'],
            ['municipality_name' => 'El Peñón', 'department_id'=>'15'],
            ['municipality_name' => 'El Rosal', 'department_id'=>'15'],
            ['municipality_name' => 'Facatativá', 'department_id'=>'15'],
            ['municipality_name' => 'Fomeque', 'department_id'=>'15'],
            ['municipality_name' => 'Fosca', 'department_id'=>'15'],
            ['municipality_name' => 'Funza', 'department_id'=>'15'],
            ['municipality_name' => 'Fúquene', 'department_id'=>'15'],
            ['municipality_name' => 'Fusagasugá', 'department_id'=>'15'],
            ['municipality_name' => 'Gachalá', 'department_id'=>'15'],
            ['municipality_name' => 'Gachancipá', 'department_id'=>'15'],
            ['municipality_name' => 'Gachetá', 'department_id'=>'15'],
            ['municipality_name' => 'Gama', 'department_id'=>'15'],
            ['municipality_name' => 'Girardot', 'department_id'=>'15'],
            ['municipality_name' => 'Granada', 'department_id'=>'15'],
            ['municipality_name' => 'Guachetá', 'department_id'=>'15'],
            ['municipality_name' => 'Guaduas', 'department_id'=>'15'],
            ['municipality_name' => 'Guasca', 'department_id'=>'15'],
            ['municipality_name' => 'Guataquí', 'department_id'=>'15'],
            ['municipality_name' => 'Guatavita', 'department_id'=>'15'],
            ['municipality_name' => 'Guayabal de Síquima', 'department_id'=>'15'],
            ['municipality_name' => 'Guayabetal', 'department_id'=>'15'],
            ['municipality_name' => 'Gutiérrez', 'department_id'=>'15'],
            ['municipality_name' => 'Jerusalén', 'department_id'=>'15'],
            ['municipality_name' => 'Junín', 'department_id'=>'15'],
            ['municipality_name' => 'La Calera', 'department_id'=>'15'],
            ['municipality_name' => 'La Mesa', 'department_id'=>'15'],
            ['municipality_name' => 'La Palma', 'department_id'=>'15'],
            ['municipality_name' => 'La Peña', 'department_id'=>'15'],
            ['municipality_name' => 'La Vega', 'department_id'=>'15'],
            ['municipality_name' => 'Lenguazaque', 'department_id'=>'15'],
            ['municipality_name' => 'Machetá', 'department_id'=>'15'],
            ['municipality_name' => 'Madrid', 'department_id'=>'15'],
            ['municipality_name' => 'Manta', 'department_id'=>'15'],
            ['municipality_name' => 'Medina', 'department_id'=>'15'],
            ['municipality_name' => 'Mosquera', 'department_id'=>'15'],
            ['municipality_name' => 'Nariño', 'department_id'=>'15'],
            ['municipality_name' => 'Nemocón', 'department_id'=>'15'],
            ['municipality_name' => 'Nilo', 'department_id'=>'15'],
            ['municipality_name' => 'Nimaima', 'department_id'=>'15'],
            ['municipality_name' => 'Nocaima', 'department_id'=>'15'],
            ['municipality_name' => 'Pacho', 'department_id'=>'15'],
            ['municipality_name' => 'Paime', 'department_id'=>'15'],
            ['municipality_name' => 'Pandi', 'department_id'=>'15'],
            ['municipality_name' => 'Paratebueno', 'department_id'=>'15'],
            ['municipality_name' => 'Pasca', 'department_id'=>'15'],
            ['municipality_name' => 'Puerto Salgar', 'department_id'=>'15'],
            ['municipality_name' => 'Pulí', 'department_id'=>'15'],
            ['municipality_name' => 'Quebradanegra', 'department_id'=>'15'],
            ['municipality_name' => 'Quetame', 'department_id'=>'15'],
            ['municipality_name' => 'Quipile', 'department_id'=>'15'],
            ['municipality_name' => 'Ricaurte', 'department_id'=>'15'],
            ['municipality_name' => 'San Antonio del Tequendama', 'department_id'=>'15'],
            ['municipality_name' => 'San Bernardo', 'department_id'=>'15'],
            ['municipality_name' => 'San Cayetano', 'department_id'=>'15'],
            ['municipality_name' => 'San Francisco', 'department_id'=>'15'],
            ['municipality_name' => 'San Juan de Río Seco', 'department_id'=>'15'],
            ['municipality_name' => 'Sasaima', 'department_id'=>'15'],
            ['municipality_name' => 'Sesquilé', 'department_id'=>'15'],
            ['municipality_name' => 'Sibaté', 'department_id'=>'15'],
            ['municipality_name' => 'Silvania', 'department_id'=>'15'],
            ['municipality_name' => 'Simijaca', 'department_id'=>'15'],
            ['municipality_name' => 'Soacha', 'department_id'=>'15'],
            ['municipality_name' => 'Sopó', 'department_id'=>'15'],
            ['municipality_name' => 'Subachoque', 'department_id'=>'15'],
            ['municipality_name' => 'Suesca', 'department_id'=>'15'],
            ['municipality_name' => 'Supatá', 'department_id'=>'15'],
            ['municipality_name' => 'Susa', 'department_id'=>'15'],
            ['municipality_name' => 'Sutatausa', 'department_id'=>'15'],
            ['municipality_name' => 'Tabio', 'department_id'=>'15'],
            ['municipality_name' => 'Tausa', 'department_id'=>'15'],
            ['municipality_name' => 'Tena', 'department_id'=>'15'],
            ['municipality_name' => 'Tenjo', 'department_id'=>'15'],
            ['municipality_name' => 'Tibacuy', 'department_id'=>'15'],
            ['municipality_name' => 'Tibirita', 'department_id'=>'15'],
            ['municipality_name' => 'Tocaima', 'department_id'=>'15'],
            ['municipality_name' => 'Tocancipá', 'department_id'=>'15'],
            ['municipality_name' => 'Topaipí', 'department_id'=>'15'],
            ['municipality_name' => 'Ubalá', 'department_id'=>'15'],
            ['municipality_name' => 'Ubaque', 'department_id'=>'15'],
            ['municipality_name' => 'Ubaté', 'department_id'=>'15'],
            ['municipality_name' => 'Une', 'department_id'=>'15'],
            ['municipality_name' => 'Útica', 'department_id'=>'15'],
            ['municipality_name' => 'Venecia', 'department_id'=>'15'],
            ['municipality_name' => 'Vergara', 'department_id'=>'15'],
            ['municipality_name' => 'Vianí', 'department_id'=>'15'],
            ['municipality_name' => 'Villagómez', 'department_id'=>'15'],
            ['municipality_name' => 'Villapinzón', 'department_id'=>'15'],
            ['municipality_name' => 'Villeta', 'department_id'=>'15'],
            ['municipality_name' => 'Viotá', 'department_id'=>'15'],
            ['municipality_name' => 'Yacopí', 'department_id'=>'15'],
            ['municipality_name' => 'Zipacón', 'department_id'=>'15'],
            ['municipality_name' => 'Zipaquirá', 'department_id'=>'15'],

            //Municipios de Santander
            ['municipality_name' => 'Aguada', 'department_id'=>'28'],
            ['municipality_name' => 'Cabrera', 'department_id'=>'28'],
            ['municipality_name' => 'El Peñón', 'department_id'=>'28'],
            ['municipality_name' => 'Guaca', 'department_id'=>'28'],
            ['municipality_name' => 'Palmar', 'department_id'=>'28'],

            //Municipios de Norte de Santander
            ['municipality_name' => 'Chinácota', 'department_id'=>'23'],
            ['municipality_name' => 'Pamplona', 'department_id'=>'23'],
            ['municipality_name' => 'El Carmen', 'department_id'=>'23'],
            ['municipality_name' => 'Villa del Rosario', 'department_id'=>'23'],
            ['municipality_name' => 'Villa Caro', 'department_id'=>'23'],

            //Municipios de Huila
            ['municipality_name' => 'Paicol', 'department_id'=>'18'],
            ['municipality_name' => 'Palestina', 'department_id'=>'18'],
            ['municipality_name' => 'La Plata', 'department_id'=>'18'],
            ['municipality_name' => 'Tello', 'department_id'=>'18'],
            ['municipality_name' => 'Hobo', 'department_id'=>'18'],

            //Municipios de Tolima
            ['municipality_name' => 'Rioblanco', 'department_id'=>'30'],
            ['municipality_name' => 'Melgar', 'department_id'=>'30'],
            ['municipality_name' => 'Palocabildo', 'department_id'=>'30'],
            ['municipality_name' => 'Santa Isabel', 'department_id'=>'30'],
            ['municipality_name' => 'Rovira', 'department_id'=>'30'],

            //Municipios de Antioquia
            ['municipality_name' => 'Granada', 'department_id'=>'2'],
            ['municipality_name' => 'Peque', 'department_id'=>'2'],
            ['municipality_name' => 'Belmira', 'department_id'=>'2'],
            ['municipality_name' => 'Caracolí', 'department_id'=>'2'],
            ['municipality_name' => 'El Bagre', 'department_id'=>'2'],

            //Municipios de Cauca
            ['municipality_name' => 'Argelia', 'department_id'=>'11'],
            ['municipality_name' => 'Morales', 'department_id'=>'11'],
            ['municipality_name' => 'Villa Rica', 'department_id'=>'11'],
            ['municipality_name' => 'Cajibío', 'department_id'=>'11'],
            ['municipality_name' => 'Buenos Aires', 'department_id'=>'11'],

            //Municipios de Valle del Cauca
            ['municipality_name' => 'Riofrío', 'department_id'=>'31'],
            ['municipality_name' => 'La Victoria', 'department_id'=>'31'],
            ['municipality_name' => 'Cartago', 'department_id'=>'31'],
            ['municipality_name' => 'Buenaventura', 'department_id'=>'31'],
            ['municipality_name' => 'Cali', 'department_id'=>'31'],
        ];

        DB::table('municipalities')->insert($municipalities);
    }
}
