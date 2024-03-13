<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DenominationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $denominations = [
            ['denominate_description' => 'Health professional who diagnoses, treats and prevents diseases in patients', 'occupation_name' => 'Doctor'],
            ['denominate_description' => 'Provides direct care to patients, administers medications and supports doctors in healthcare.', 'occupation_name' => 'Nurse'],
            ['denominate_description' => 'Design, supervise and manage construction projects, such as roads, bridges and buildings.', 'occupation_name' => 'Civil engineer'],
            ['denominate_description' => 'Facilitates student learning in various subjects and educational levels.','occupation_name' => 'Teacher'],
            ['denominate_description' => 'Creates, develops and maintains computer software and applications.', 'occupation_name' => 'Software Programmer'],
            ['denominate_description' => 'Create visual elements, such as logos, graphics, and designs, to communicate specific messages.', 'occupation_name' => 'Graphic Designer'],
            ['denominate_description' => 'Prepares and cooks food in restaurants or other food service environments.', 'occupation_name' => 'Chef'],
            ['denominate_description' => 'Applies and enforces the law, protects the community, and responds to emergency situations.', 'occupation_name' => 'Police'],
            ['denominate_description' => 'It studies human behavior and provides advice and treatment for emotional and mental problems.',  'occupation_name' => 'Psychologist'],
            ['denominate_description' => 'Researches, writes and presents news and current events through various media outlets.', 'occupation_name' => 'Journalist'],
            ['denominate_description' => 'Performs accounting and finance-related tasks, such as preparing financial reports and managing records.', 'occupation_name' => 'Accountant'],
            ['denominate_description' => 'Design and plan buildings and structures, taking into account aesthetic, functional and technical aspects.', 'occupation_name' => 'Architect'],
            ['denominate_description' => 'Installs, maintains and repairs electrical systems in buildings and other structures.', 'occupation_name' => 'Electrician'],
            ['denominate_description' => 'Provides legal advice, represents clients in court and negotiates legal agreements.', 'occupation_name' => 'Lawyer'],
            ['denominate_description' => 'Dispenses medications and offers advice on their safe and effective use.', 'occupation_name' => 'Pharmacist'],
            ['denominate_description' => 'Plays characters in theater, film or television productions.', 'occupation_name' => 'Actor/Actress'],
            ['denominate_description' => 'Grow and harvest agricultural products, such as grains, fruits and vegetables.', 'occupation_name' => 'Farmer'],
            ['denominate_description' => 'Study space, planets, stars and other celestial phenomena.', 'occupation_name' => 'Astronomer'],
            ['denominate_description' => 'Responds to emergencies to put out fires, perform rescues and provide medical assistance.', 'occupation_name' => 'Firefighter'],
            ['denominate_description' => 'Work in points of sale, process transactions and provide customer service.', 'occupation_name' => 'Cashier'],
            ['denominate_description' => 'Analyze and interpret large data sets to obtain meaningful insights.', 'occupation_name' => 'Data Scientist'],
            ['denominate_description' => 'Diagnoses and treats dental and oral problems, performs extractions, and offers preventative care.', 'occupation_name' => 'Dentist'],
            ['denominate_description' => 'Repairs and maintains electrical systems in vehicles, including cars and trucks.', 'occupation_name' => 'Automotive Electrician'],
            ['denominate_description' => 'It studies economic trends, analyzes data and provides economic policy advice.', 'occupation_name' => 'Economist'],
            ['denominate_description' => 'Capture creative and meaningful visual images using cameras and photography techniques.', 'occupation_name' => 'Photographer'],
            ['denominate_description' => 'Studies the structure and composition of the Earth, investigates natural resources and geological hazards.', 'occupation_name' => 'Geologist'],
            ['denominate_description' => 'Oversees human resources functions, including recruiting, training, and personnel management.', 'occupation_name' => 'Human resources manager'],
            ['denominate_description' => 'Designs and develops aircraft and space systems.', 'occupation_name' => 'Aerospace/Engineer'],
            ['denominate_description' => 'Administers justice in courts, interprets the law and makes judicial decisions', 'occupation_name' => 'Judge'],
            ['denominate_description' => 'Works on physical rehabilitation and movement of the body to improve health and well-being', 'occupation_name' => 'Kinesiologist'],
            ['denominate_description' => 'You study language, its structure and evolution, and can work in translation and computational linguistics.', 'occupation_name' => 'Linguist'],
            ['denominate_description' => 'Repairs and maintains machinery, vehicles and mechanical equipment.', 'occupation_name' => 'Mechanic'],
            ['denominate_description' => 'Provides nutrition counseling and plans healthy diets for individuals or communities.', 'occupation_name' => 'Nutritionist'],
            ['denominate_description' => 'Investigate the oceans, their currents, marine life and their impact on the climate.', 'occupation_name' => 'Oceanographer'],
            ['denominate_description' => 'Operates aircraft, such as airplanes or helicopters, to transport passengers or cargo.', 'occupation_name' => 'Pilot'],
            ['denominate_description' => 'Investigates the properties and composition of matter, develops new chemicals and processes.', 'occupation_name' => 'Chemist'],
            ['denominate_description' => 'Welcomes guests, manages reservations, and provides information on hotel services.', 'occupation_name' => 'Hotel receptionist'],
            ['denominate_description' => 'Examines human society, its institutions and social patterns.', 'occupation_name' => 'Sociologist'],
            ['denominate_description' => 'Helps people overcome physical and emotional limitations to participate in everyday activities.', 'occupation_name' => 'Occupational therapist'],
            ['denominate_description' => 'Performs medical imaging using ultrasound to diagnose medical conditions.', 'occupation_name' => 'Ultrasonographer'],
            ['denominate_description' => 'Promote and sell products or services to potential customers', 'occupation_name' => 'Saleswoman'],
            ['denominate_description' => 'Design and develop websites, applications and online platforms.', 'occupation_name' => 'Web Developer'],
            ['denominate_description' => 'Work with wood to build and repair structures and objects.', 'occupation_name' => 'Xylographer (Carpenter)'],
            ['denominate_description' => 'Guides students in the practice of yoga to improve physical and mental health', 'occupation_name' => 'Yoga Instructor'],
            ['denominate_description' => 'Study animals and their habitats, classify species and contribute to the conservation of fauna.', 'occupation_name' => 'Zoologist'],
        ];

        foreach ($denominations as $data) {
            $occupationId = DB::table('occupations')->where('occupation_name', $data['occupation_name'])->value('id');
    
            if ($occupationId !== null) {
                DB::table('denominations')->insert([
                    'denominate_description' => $data['denominate_description'],
                    'id_occupations' => $occupationId,
                    'occupation_name' => $data['occupation_name']
                ]);
            } else {
                throw new \Exception("No se encontró el ID de ocupación para {$data['occupation_name']}");
            }
        }
    }
}
