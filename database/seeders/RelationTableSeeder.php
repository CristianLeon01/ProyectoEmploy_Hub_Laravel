<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RelationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $relations = [

            ['name_related_occupation' => 'Medicine', 'occupation_name' => 'Doctor'],
            ['name_related_occupation' => 'Patient Care', 'occupation_name' => 'Nurse'],
            ['name_related_occupation' => 'Civil Engineering', 'occupation_name' => 'Civil engineer'],
            ['name_related_occupation' => 'Teachings', 'occupation_name' => 'Teacher'],
            ['name_related_occupation' => 'Software programming', 'occupation_name' => 'Software Programmer'],
            ['name_related_occupation' => 'Graphic design', 'occupation_name' => 'Graphic Designer'],
            ['name_related_occupation' => 'Cooking and gastronomy', 'occupation_name' => 'Chef'],
            ['name_related_occupation' => 'Application of the law', 'occupation_name' => 'Police'],
            ['name_related_occupation' => 'Psychology', 'occupation_name' => 'Psychologist'],
            ['name_related_occupation' => 'Journalism', 'occupation_name' => 'Journalist'],
            ['name_related_occupation' => 'Accounting', 'occupation_name' => 'Accountant'],
            ['name_related_occupation' => 'Architecture', 'occupation_name' => 'Architect'],
            ['name_related_occupation' => 'Electricity', 'occupation_name' => 'Electrician'],
            ['name_related_occupation' => 'Right', 'occupation_name' => 'Lawyer'],
            ['name_related_occupation' => 'Pharmacy', 'occupation_name' => 'Pharmacist'],
            ['name_related_occupation' => 'Performance', 'occupation_name' => 'Actor/Actress'],
            ['name_related_occupation' => 'Agriculture', 'occupation_name' => 'Farmer'],
            ['name_related_occupation' => 'Astronomy', 'occupation_name' => 'Astronomer'],
            ['name_related_occupation' => 'Fire fighting', 'occupation_name' => 'Firefighter'],
            ['name_related_occupation' => 'Customer Support', 'occupation_name' => 'Cashier'],
            ['name_related_occupation' => 'Data Science', 'occupation_name' => 'Data Scientist'],
            ['name_related_occupation' => 'Odontology', 'occupation_name' => 'Dentist'],
            ['name_related_occupation' => 'Vehicle maintenance', 'occupation_name' => 'Automotive Electrician'],
            ['name_related_occupation' => 'Economy', 'occupation_name' => 'Economist'],
            ['name_related_occupation' => 'Photography', 'occupation_name' => 'Photographer'],
            ['name_related_occupation' => 'Geology', 'occupation_name' => 'Geologist'],
            ['name_related_occupation' => 'Human resources management', 'occupation_name' => 'Human resources manager'],
            ['name_related_occupation' => 'Aerospace engineering', 'occupation_name' => 'Aerospace/Engineer'],
            ['name_related_occupation' => 'Justice administration', 'occupation_name' => 'Judge'],
            ['name_related_occupation' => 'Kinesiology', 'occupation_name' => 'Kinesiologist'],
            ['name_related_occupation' => 'Linguistics', 'occupation_name' => 'Linguist'],
            ['name_related_occupation' => 'Mechanics', 'occupation_name' => 'Mechanic'],
            ['name_related_occupation' => 'Nutrition', 'occupation_name' => 'Nutritionist'],
            ['name_related_occupation' => 'Oceanography', 'occupation_name' => 'Oceanographer'],
            ['name_related_occupation' => 'Pilotage', 'occupation_name' => 'Pilot'],
            ['name_related_occupation' => 'Chemistry', 'occupation_name' => 'Chemist'],
            ['name_related_occupation' => 'Customer Support', 'occupation_name' => 'Hotel receptionist'],
            ['name_related_occupation' => 'Sociology', 'occupation_name' => 'Sociologist'],
            ['name_related_occupation' => 'Occupational Therapy', 'occupation_name' => 'Occupational therapist'],
            ['name_related_occupation' => 'Medical Ultrasonography', 'occupation_name' => 'Ultrasonographer'],
            ['name_related_occupation' => 'Sales', 'occupation_name' => 'Saleswoman'],
            ['name_related_occupation' => 'Web development', 'occupation_name' => 'Web Developer'],
            ['name_related_occupation' => 'Carpentry', 'occupation_name' => 'Xylographer (Carpenter)'],
            ['name_related_occupation' => 'Yoga Teaching', 'occupation_name' => 'Yoga Instructor'],
            ['name_related_occupation' => 'Zoology', 'occupation_name' => 'Zoologist'],

        ];
        
        foreach ($relations as $data) {
            $occupationId = DB::table('occupations')->where('occupation_name', $data['occupation_name'])->value('id');
    
            if ($occupationId !== null) {
                DB::table('relations')->insert([
                    'name_related_occupation' => $data['name_related_occupation'],
                    'id_occupations' => $occupationId,
                    'occupation_name' => $data['occupation_name'],
                ]);
            } else {
                throw new \Exception("No se encontró el ID de ocupación para {$data['occupation_name']}");
            }
        }
    }
}
