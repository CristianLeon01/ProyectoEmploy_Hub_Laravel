<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FuntionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $functions = [
            ['function_description' => 'Health professional who diagnoses, treats and prevents diseases in patients', 'occupation_name' => 'Doctor'],
            ['function_description' => 'Provides direct care to patients, administers medications and supports doctors in healthcare.', 'occupation_name' => 'Nurse'],
            ['function_description' => 'Design, supervise and manage construction projects, such as roads, bridges and buildings.', 'occupation_name' => 'Civil engineer'],
            ['function_description' => 'Facilitates student learning in various subjects and educational levels.','occupation_name' => 'Teacher'],
            ['function_description' => 'Creates, develops and maintains computer software and applications.', 'occupation_name' => 'Software Programmer'],
            ['function_description' => 'Create visual elements, such as logos, graphics, and designs, to communicate specific messages.', 'occupation_name' => 'Graphic Designer'],
            ['function_description' => 'Prepares and cooks food in restaurants or other food service environments.', 'occupation_name' => 'Chef'],
            ['function_description' => 'Applies and enforces the law, protects the community, and responds to emergency situations.', 'occupation_name' => 'Police'],
            ['function_description' => 'It studies human behavior and provides advice and treatment for emotional and mental problems.',  'occupation_name' => 'Psychologist'],
            ['function_description' => 'Researches, writes and presents news and current events through various media outlets.', 'occupation_name' => 'Journalist'],
            ['function_description' => 'Performs accounting and finance-related tasks, such as preparing financial reports and managing records.', 'occupation_name' => 'Accountant'],
            ['function_description' => 'Design and plan buildings and structures, taking into account aesthetic, functional and technical aspects.', 'occupation_name' => 'Architect'],
            ['function_description' => 'Installs, maintains and repairs electrical systems in buildings and other structures.', 'occupation_name' => 'Electrician'],
            ['function_description' => 'Provides legal advice, represents clients in court and negotiates legal agreements.', 'occupation_name' => 'Lawyer'],
            ['function_description' => 'Dispenses medications and offers advice on their safe and effective use.', 'occupation_name' => 'Pharmacist'],
            ['function_description' => 'Plays characters in theater, film or television productions.', 'occupation_name' => 'Actor/Actress'],
            ['function_description' => 'Grow and harvest agricultural products, such as grains, fruits and vegetables.', 'occupation_name' => 'Farmer'],
            ['function_description' => 'Study space, planets, stars and other celestial phenomena.', 'occupation_name' => 'Astronomer'],
            ['function_description' => 'Responds to emergencies to put out fires, perform rescues and provide medical assistance.', 'occupation_name' => 'Firefighter'],
            ['function_description' => 'Work in points of sale, process transactions and provide customer service.', 'occupation_name' => 'Cashier'],
            ['function_description' => 'Analyze and interpret large data sets to obtain meaningful insights.', 'occupation_name' => 'Data Scientist'],
            ['function_description' => 'Diagnoses and treats dental and oral problems, performs extractions, and offers preventative care.', 'occupation_name' => 'Dentist'],
            ['function_description' => 'Repairs and maintains electrical systems in vehicles, including cars and trucks.', 'occupation_name' => 'Automotive Electrician'],
            ['function_description' => 'It studies economic trends, analyzes data and provides economic policy advice.', 'occupation_name' => 'Economist'],
            ['function_description' => 'Capture creative and meaningful visual images using cameras and photography techniques.', 'occupation_name' => 'Photographer'],
            ['function_description' => 'Studies the structure and composition of the Earth, investigates natural resources and geological hazards.', 'occupation_name' => 'Geologist'],
            ['function_description' => 'Oversees human resources functions, including recruiting, training, and personnel management.', 'occupation_name' => 'Human resources manager'],
            ['function_description' => 'Designs and develops aircraft and space systems.', 'occupation_name' => 'Aerospace/Engineer'],
            ['function_description' => 'Administers justice in courts, interprets the law and makes judicial decisions', 'occupation_name' => 'Judge'],
            ['function_description' => 'Works on physical rehabilitation and movement of the body to improve health and well-being', 'occupation_name' => 'Kinesiologist'],
            ['function_description' => 'You study language, its structure and evolution, and can work in translation and computational linguistics.', 'occupation_name' => 'Linguist'],
            ['function_description' => 'Repairs and maintains machinery, vehicles and mechanical equipment.', 'occupation_name' => 'Mechanic'],
            ['function_description' => 'Provides nutrition counseling and plans healthy diets for individuals or communities.', 'occupation_name' => 'Nutritionist'],
            ['function_description' => 'Investigate the oceans, their currents, marine life and their impact on the climate.', 'occupation_name' => 'Oceanographer'],
            ['function_description' => 'Operates aircraft, such as airplanes or helicopters, to transport passengers or cargo.', 'occupation_name' => 'Pilot'],
            ['function_description' => 'Investigates the properties and composition of matter, develops new chemicals and processes.', 'occupation_name' => 'Chemist'],
            ['function_description' => 'Welcomes guests, manages reservations, and provides information on hotel services.', 'occupation_name' => 'Hotel receptionist'],
            ['function_description' => 'Examines human society, its institutions and social patterns.', 'occupation_name' => 'Sociologist'],
            ['function_description' => 'Helps people overcome physical and emotional limitations to participate in everyday activities.', 'occupation_name' => 'Occupational therapist'],
            ['function_description' => 'Performs medical imaging using ultrasound to diagnose medical conditions.', 'occupation_name' => 'Ultrasonographer'],
            ['function_description' => 'Promote and sell products or services to potential customers', 'occupation_name' => 'Saleswoman'],
            ['function_description' => 'Design and develop websites, applications and online platforms.', 'occupation_name' => 'Web Developer'],
            ['function_description' => 'Work with wood to build and repair structures and objects.', 'occupation_name' => 'Xylographer (Carpenter)'],
            ['function_description' => 'Guides students in the practice of yoga to improve physical and mental health', 'occupation_name' => 'Yoga Instructor'],
            ['function_description' => 'Study animals and their habitats, classify species and contribute to the conservation of fauna.', 'occupation_name' => 'Zoologist'],
        ];
    
        foreach ($functions as $data) {
            $occupationId = DB::table('occupations')->where('occupation_name', $data['occupation_name'])->value('id');
    
            if ($occupationId !== null) {
                DB::table('functions')->insert([
                    'function_description' => $data['function_description'],
                    'id_occupations' => $occupationId,
                    'occupation_name' => $data['occupation_name'],
                ]);
            } else {
                throw new \Exception("No se encontró el ID de ocupación para {$data['occupation_name']}");
            }
        }
    }
}
