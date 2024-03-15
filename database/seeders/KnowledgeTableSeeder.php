<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KnowledgeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $knowledges = [
            ['knowledge_name' => 'Medicine', 'knowledge_description' => 'Knowledge of diagnosing, treating, and preventing illnesses in patients, as well as providing comprehensive healthcare.', 'occupation_name' => 'Doctor'],
            ['knowledge_name' => 'Nursing', 'knowledge_description' => 'Knowledge of providing direct care to patients, administering medications, and supporting physicians in healthcare delivery.', 'occupation_name' => 'Nurse'],
            ['knowledge_name' => 'Civil Engineering', 'knowledge_description' => 'Knowledge of designing, supervising, and managing construction projects such as roads, bridges, and buildings.', 'occupation_name' => 'Civil engineer'],
            ['knowledge_name' => 'Education', 'knowledge_description' => 'Knowledge of facilitating student learning in various subjects and educational levels.', 'occupation_name' => 'Teacher'],
            ['knowledge_name' => 'Software Development', 'knowledge_description' => 'Knowledge of creating, developing, and maintaining software and computer applications.', 'occupation_name' => 'Software Programmer'],
            ['knowledge_name' => 'Graphic Design', 'knowledge_description' => 'Knowledge of creating visual elements such as logos, graphics, and designs to convey specific messages', 'occupation_name' => 'Graphic Designer'],
            ['knowledge_name' => 'Culinary Arts', 'knowledge_description' => 'Knowledge of preparing and cooking food in restaurants or other food service environments.', 'occupation_name' => 'Chef'],
            ['knowledge_name' => 'Law Enforcement', 'knowledge_description' => 'Knowledge of enforcing the law, protecting the community, and responding to emergency situations.', 'occupation_name' => 'Police'],
            ['knowledge_name' => 'Psychology', 'knowledge_description' => 'Knowledge of studying human behavior and providing counseling and treatment for emotional and mental issues.', 'occupation_name' => 'Psychologist'],
            ['knowledge_name' => 'Journalism', 'knowledge_description' => 'Knowledge of researching, writing, and presenting news and current events through various media outlets.', 'occupation_name' => 'Journalist'],
            ['knowledge_name' => 'Accounting', 'knowledge_description' => ' Knowledge of tasks related to accounting and finance, including the preparation of financial reports and record management.', 'occupation_name' => 'Accountant'],
            ['knowledge_name' => 'Architecture', 'knowledge_description' => 'Knowledge of designing and planning buildings and structures, considering aesthetic, functional, and technical aspects.', 'occupation_name' => 'Architect'],
            ['knowledge_name' => 'Electrical Systems', 'knowledge_description' => 'Knowledge of installing, maintaining, and repairing electrical systems in buildings and other structures.', 'occupation_name' => 'Electrician'],
            ['knowledge_name' => 'Legal Practice', 'knowledge_description' => 'Knowledge of providing legal advice, representing clients in court, and negotiating legal agreements', 'occupation_name' => 'Lawyer'],
            ['knowledge_name' => 'Pharmacy', 'knowledge_description' => 'Knowledge of dispensing medications and providing advice on their safe and effective use.', 'occupation_name' => 'Pharmacist'],
            ['knowledge_name' => 'Acting', 'knowledge_description' => 'Knowledge of interpreting characters in theatrical, cinematic, or television productions, conveying emotions and messages through performance.', 'occupation_name' => 'Actor/Actress'],
            ['knowledge_name' => 'Agriculture', 'knowledge_description' => 'Knowledge of cultivating and harvesting agricultural products, such as crops, fruits, and vegetables, and managing farm activities.', 'occupation_name' => 'Farmer'],
            ['knowledge_name' => 'Astronomy', 'knowledge_description' => 'Knowledge of space, planets, stars, and other celestial phenomena through observation and analysis of astronomical data.', 'occupation_name' => 'Astronomer'],
            ['knowledge_name' => 'Firefighting', 'knowledge_description' => 'Knowledge of responding to emergencies, extinguishing fires, performing rescues, and providing emergency medical assistance.', 'occupation_name' => 'Firefighter'],
            ['knowledge_name' => 'Retail Transactions', 'knowledge_description' => 'Knowledge of working in retail settings, processing financial transactions, handling cash, and providing customer service.', 'occupation_name' => 'Cashier'],
            ['knowledge_name' => 'Data Science', 'knowledge_description' => 'Knowledge of analyzing large datasets using statistical techniques and programming tools to extract valuable insights and make informed decisions.', 'occupation_name' => 'Data Scientist'],
            ['knowledge_name' => 'Dentistry', 'knowledge_description' => 'Knowledge of diagnosing and treating dental and oral issues, performing dental procedures, and promoting oral health.', 'occupation_name' => 'Dentist'],
            ['knowledge_name' => 'Automotive Electrical Systems', 'knowledge_description' => 'Knowledge of repairing and maintaining electrical systems in vehicles, including cars and trucks.', 'occupation_name' => 'Automotive Electrician'],
            ['knowledge_name' => 'Economics', 'knowledge_description' => 'Knowledge of studying economic trends, analyzing data, and providing advice on economic policies.', 'occupation_name' => 'Economist'],
            ['knowledge_name' => 'Photography', 'knowledge_description' => 'Knowledge of capturing creative and meaningful visual images using cameras and photographic techniques.', 'occupation_name' => 'Photographer'],
            ['knowledge_name' => 'Geology', 'knowledge_description' => 'Knowledge of studying the Earths structure and composition, researching natural resources, and analyzing geological risks.', 'occupation_name' => 'Geologist'],
            ['knowledge_name' => 'Human Resources Management', 'knowledge_description' => 'Knowledge of overseeing human resources functions, including hiring, training, and personnel management.', 'occupation_name' => 'Human resources manager'],
            ['knowledge_name' => 'Aerospace Engineering', 'knowledge_description' => 'Knowledge of designing and developing aircraft and aerospace systems.', 'occupation_name' => 'Aerospace/Engineer'],
            ['knowledge_name' => 'Judicial Administration', 'knowledge_description' => 'Judicial Administration", "description": "Knowledge of administering justice in courts, interpreting the law, and making judicial decisions.', 'occupation_name' => 'Judge'],
            ['knowledge_name' => 'Kinesiology', 'knowledge_description' => 'Knowledge of working in physical rehabilitation, using therapeutic exercises', 'occupation_name' => 'Kinesiologist'],
            ['knowledge_name' => 'Linguistics', 'knowledge_description' => 'Knowledge of studying language, researching its structure, evolution, and variations, and possibly working in translation or computational linguistics.', 'occupation_name' => 'Linguist'],
            ['knowledge_name' => 'Mechanic', 'knowledge_description' => 'Knowledge of repairing and maintaining machinery, vehicles, and mechanical equipment, diagnosing and solving mechanical issues.', 'occupation_name' => 'Mechanic'],
            ['knowledge_name' => 'Nutrition', 'knowledge_description' => 'Knowledge of providing nutritional advice, planning healthy diets, and working with individuals or communities to improve health through diet.', 'occupation_name' => 'Nutritionist'],
            ['knowledge_name' => 'Oceanography', 'knowledge_description' => 'Knowledge of researching oceans, their currents, marine life, and their impact on climate, contributing to the understanding and conservation of marine ecosystems.', 'occupation_name' => 'Oceanographer'],
            ['knowledge_name' => 'Aviation', 'knowledge_description' => 'Knowledge of operating aircraft, ensuring safe and efficient flights to transport passengers or cargo.', 'occupation_name' => 'Pilot'],
            ['knowledge_name' => 'Chemistry', 'knowledge_description' => ' Knowledge of investigating the properties and composition of matter, developing new chemical products and processes, and conducting chemical analyses.', 'occupation_name' => 'Chemist'],
            ['knowledge_name' => 'Hotel Management', 'knowledge_description' => ' Knowledge of welcoming guests, managing reservations, and providing information about hotel services.', 'occupation_name' => 'Hotel receptionist'],
            ['knowledge_name' => 'Sociology', 'knowledge_description' => 'Knowledge of examining human society, its institutions, and social patterns to understand and analyze human behavior in groups.', 'occupation_name' => 'Sociologist'],
            ['knowledge_name' => 'Occupational Therapy', 'knowledge_description' => ' Knowledge of helping individuals overcome physical and emotional limitations to participate in daily activities through specific therapies.', 'occupation_name' => 'Occupational therapist'],
            ['knowledge_name' => 'Medical Ultrasonography', 'knowledge_description' => 'Knowledge of performing medical imaging using ultrasound to diagnose and monitor medical conditions, especially in the field of medical imaging.', 'occupation_name' => 'Ultrasonographer'],
            ['knowledge_name' => 'Sales Techniques', 'knowledge_description' => ' Knowledge of promoting and selling products or services, managing customer relationships, and achieving sales goals.', 'occupation_name' => 'Saleswoman'],
            ['knowledge_name' => 'Web Development', 'knowledge_description' => 'Knowledge of designing and developing websites, applications, and online platforms using programming languages and specific tools.', 'occupation_name' => 'Web Developer'],
            ['knowledge_name' => 'Carpentry', 'knowledge_description' => ' Knowledge of working with wood to build and repair structures and objects, using carpentry skills and specialized tools.', 'occupation_name' => 'Xylographer (Carpenter)'],
            ['knowledge_name' => 'Yoga Instruction', 'knowledge_description' => 'Knowledge of guiding students in the practice of yoga, teaching postures, breathing techniques, and promoting physical and mental health.', 'occupation_name' => 'Yoga Instructor'],
            ['knowledge_name' => 'Zoology', 'knowledge_description' => 'Knowledge of studying animals and their habitats, classifying species, and contributing to the conservation of faun', 'occupation_name' => 'Zoologist']
        ];

        foreach ($knowledges as $data) {
            $occupationId = DB::table('occupations')->where('occupation_name', $data['occupation_name'])->value('id');
    
            if ($occupationId !== null) {
                DB::table('knowledge')->insert([
                    'knowledge_name' => $data['knowledge_name'],
                    'knowledge_description' => $data['knowledge_description'],
                    'id_occupations' => $occupationId,
                    'occupation_name' => $data['occupation_name'],
                ]);
            } else {
                throw new \Exception("No se encontró el ID de ocupación para {$data['occupation_name']}");
            }
        }
    }
}