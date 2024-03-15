<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['name_post' => 'Doctor', 'description' => 'Professions related to healthcare and medicine.', "occupation_id" => 1],
            ['name_post' => 'Healthcare Professional', 'description' => 'Qualified individual to diagnose, treat, and prevent illnesses and injuries in patients.', "occupation_id" => 1],
            ['name_post' => 'Engineer', 'description' => 'Professional specialized in designing, constructing, and maintaining structures and systems.', "occupation_id" => 1],
            ['name_post' => 'Education', 'description' => 'Professions related to teaching and education.', "occupation_id" => 1],
            ['name_post' => 'Information Technology Technician', 'description' => 'Individual with technical skills in computer systems and digital technologies.', "occupation_id" => 1],
            ['name_post' => 'Designer', 'description' => 'Creative professional specializing in creating visual concepts and design solutions.', "occupation_id" => 1],
            ['name_post' => 'Hospitality Staff', 'description' => 'Individual responsible for providing services in the hospitality and restaurant industry.', "occupation_id" => 1],
            ['name_post' => 'Security Officer', 'description' => 'Person in charge of protecting and maintaining the safety of individuals and properties.', "occupation_id" => 1],
            ['name_post' => 'Social Researcher', 'description' => 'Professional dedicated to the study and analysis of society and human behavior.', "occupation_id" => 1],
            ['name_post' => 'Media Professional', 'description' => 'Individual involved in the production and distribution of media content and communications.',"occupation_id" => 1],
            ['name_post' => 'Financial Analyst', 'description' => 'Professional specialized in the analysis and management of financial and economic information.', "occupation_id" => 1],
            ['name_post' => 'Architect', 'description' => 'Designs and plans buildings and structures, taking into account aesthetic, functional, and technical aspects.', "occupation_id" => 1],
            ['name_post' => 'Electrician', 'description' => 'Installs, maintains, and repairs electrical systems in buildings and other structures.', "occupation_id" => 1],
            ['name_post' => 'Lawyer', 'description' => 'Provides legal advice, represents clients in courts, and negotiates legal agreements.', "occupation_id" => 1],
            ['name_post' => 'Pharmacist', 'description' => 'Dispenses medications and offers advice on their safe and effective use.', "occupation_id" => 1],
            ['name_post' => 'Actor/Actress', 'description' => 'Plays characters in theater, film, or television productions.', "occupation_id" => 1],
            ['name_post' => 'Farmer', 'description' => 'Grows and harvests agricultural products such as grains, fruits, and vegetables.', "occupation_id" => 1],
            ['name_post' => 'Astronomer', 'description' => 'Studies space, planets, stars, and other celestial phenomena.', "occupation_id" => 1],
            ['name_post' => 'Firefighter', 'description' => 'Responds to emergencies to put out fires, perform rescues, and provide medical assistance.', "occupation_id" => 1],
            ['name_post' => 'Cashier', 'description' => 'Works in points of sale, processes transactions, and provides customer service.', "occupation_id" => 1],
            ['name_post' => 'Data Scientist', 'description' => 'Analyzes and interprets large datasets to obtain meaningful insights.', "occupation_id" => 1],
            ['name_post' => 'Dentist', 'description' => 'Diagnoses and treats dental and oral problems, performs extractions, and offers preventive care.', "occupation_id" => 1],
            ['name_post' => 'Automotive Electrician', 'description' => 'Repairs and maintains electrical systems in vehicles, including cars and trucks.', "occupation_id" => 1],
            ['name_post' => 'Economist', 'description' => 'Studies economic trends, analyzes data, and provides economic policy advice.', "occupation_id" => 1],
            ['name_post' => 'Photographer', 'description' => 'Captures creative and meaningful visual images using cameras and photography techniques.', "occupation_id" => 1],
            ['name_post' => 'Geologist', 'description' => 'Studies the structure and composition of the Earth, investigates natural resources, and geological hazards.', "occupation_id" => 1],
            ['name_post' => 'Human Resources Manager', 'description' => 'Oversees human resources functions, including recruiting, training, and personnel management.', "occupation_id" => 1],
            ['name_post' => 'Aerospace Engineer', 'description' => 'Designs and develops aircraft and space systems.', "occupation_id" => 1],
            ['name_post' => 'Judge', 'description' => 'Administers justice in courts, interprets the law, and makes judicial decisions.', "occupation_id" => 1],
            ['name_post' => 'Kinesiologist', 'description' => 'Works on physical rehabilitation and movement of the body to improve health and well-being.', "occupation_id" => 1],
            ['name_post' => 'Linguist', 'description' => 'Studies language, its structure, evolution, and works in translation and computational linguistics.', "occupation_id" => 1],
            ['name_post' => 'Mechanic', 'description' => 'Repairs and maintains machinery, vehicles, and mechanical equipment.', "occupation_id" => 1],
            ['name_post' => 'Nutritionist', 'description' => 'Provides nutrition counseling and plans healthy diets for individuals or communities.', "occupation_id" => 1],
            ['name_post' => 'Oceanographer', 'description' => 'Investigates the oceans, their currents, marine life, and their impact on the climate.', "occupation_id" => 1],
            ['name_post' => 'Pilot', 'description' => 'Operates aircraft, such as airplanes or helicopters, to transport passengers or cargo.', "occupation_id" => 1],
            ['name_post' => 'Chemist', 'description' => 'Investigates the properties and composition of matter, develops new chemicals, and processes.', "occupation_id" => 1],
            ['name_post' => 'Hotel Receptionist', 'description' => 'Welcomes guests, manages reservations, and provides information on hotel services.', "occupation_id" => 1],
            ['name_post' => 'Sociologist', 'description' => 'Examines human society, its institutions, and social patterns.', "occupation_id" => 1],
            ['name_post' => 'Occupational Therapist', 'description' => 'Helps people overcome physical and emotional limitations to participate in everyday activities.', "occupation_id" => 1],
            ['name_post' => 'Ultrasonographer', 'description' => 'Performs medical imaging using ultrasound to diagnose medical conditions.', "occupation_id" => 1],
            ['name_post' => 'Saleswoman', 'description' => 'Promotes and sells products or services to potential customers.', "occupation_id" => 1],
            ['name_post' => 'Web Developer', 'description' => 'Designs and develops websites, applications, and online platforms.', "occupation_id" => 1],
            ['name_post' => 'Carpenter', 'description' => 'Works with wood to build and repair structures and objects.', "occupation_id" => 1],
            ['name_post' => 'Yoga Instructor', 'description' => 'Guides students in the practice of yoga to improve physical and mental health.', "occupation_id" => 1],
            ['name_post' => 'Zoologist', 'description' => 'Studies animals and their habitats, classifies species, and contributes to the conservation of fauna.', "occupation_id" => 1],
        ];     

        DB::table('posts')->insert($posts);

    }
}