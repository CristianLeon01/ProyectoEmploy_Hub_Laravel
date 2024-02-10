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
            ['name_post' => 'Doctor', 'description' => 'Professions related to healthcare and medicine.'],
            ['name_post' => 'Healthcare Professional', 'description' => 'Qualified individual to diagnose, treat, and prevent illnesses and injuries in patients.'],
            ['name_post' => 'Engineer', 'description' => 'Professional specialized in designing, constructing, and maintaining structures and systems.'],
            ['name_post' => 'Education', 'description' => 'Professions related to teaching and education.'],
            ['name_post' => 'Information Technology Technician', 'description' => 'Individual with technical skills in computer systems and digital technologies.'],
            ['name_post' => 'Designer', 'description' => 'Creative professional specializing in creating visual concepts and design solutions.'],
            ['name_post' => 'Hospitality Staff', 'description' => 'Individual responsible for providing services in the hospitality and restaurant industry.'],
            ['name_post' => 'Security Officer', 'description' => 'Person in charge of protecting and maintaining the safety of individuals and properties.'],
            ['name_post' => 'Social Researcher', 'description' => 'Professional dedicated to the study and analysis of society and human behavior.'],
            ['name_post' => 'Media Professional', 'description' => 'Individual involved in the production and distribution of media content and communications.'],
            ['name_post' => 'Financial Analyst', 'description' => 'Professional specialized in the analysis and management of financial and economic information.'],
            ['name_post' => 'Architect', 'description' => 'Designs and plans buildings and structures, taking into account aesthetic, functional, and technical aspects.'],
            ['name_post' => 'Electrician', 'description' => 'Installs, maintains, and repairs electrical systems in buildings and other structures.'],
            ['name_post' => 'Lawyer', 'description' => 'Provides legal advice, represents clients in courts, and negotiates legal agreements.'],
            ['name_post' => 'Pharmacist', 'description' => 'Dispenses medications and offers advice on their safe and effective use.'],
            ['name_post' => 'Actor/Actress', 'description' => 'Plays characters in theater, film, or television productions.'],
            ['name_post' => 'Farmer', 'description' => 'Grows and harvests agricultural products such as grains, fruits, and vegetables.'],
            ['name_post' => 'Astronomer', 'description' => 'Studies space, planets, stars, and other celestial phenomena.'],
            ['name_post' => 'Firefighter', 'description' => 'Responds to emergencies to put out fires, perform rescues, and provide medical assistance.'],
            ['name_post' => 'Cashier', 'description' => 'Works in points of sale, processes transactions, and provides customer service.'],
            ['name_post' => 'Data Scientist', 'description' => 'Analyzes and interprets large datasets to obtain meaningful insights.'],
            ['name_post' => 'Dentist', 'description' => 'Diagnoses and treats dental and oral problems, performs extractions, and offers preventive care.'],
            ['name_post' => 'Automotive Electrician', 'description' => 'Repairs and maintains electrical systems in vehicles, including cars and trucks.'],
            ['name_post' => 'Economist', 'description' => 'Studies economic trends, analyzes data, and provides economic policy advice.'],
            ['name_post' => 'Photographer', 'description' => 'Captures creative and meaningful visual images using cameras and photography techniques.'],
            ['name_post' => 'Geologist', 'description' => 'Studies the structure and composition of the Earth, investigates natural resources, and geological hazards.'],
            ['name_post' => 'Human Resources Manager', 'description' => 'Oversees human resources functions, including recruiting, training, and personnel management.'],
            ['name_post' => 'Aerospace Engineer', 'description' => 'Designs and develops aircraft and space systems.'],
            ['name_post' => 'Judge', 'description' => 'Administers justice in courts, interprets the law, and makes judicial decisions.'],
            ['name_post' => 'Kinesiologist', 'description' => 'Works on physical rehabilitation and movement of the body to improve health and well-being.'],
            ['name_post' => 'Linguist', 'description' => 'Studies language, its structure, evolution, and works in translation and computational linguistics.'],
            ['name_post' => 'Mechanic', 'description' => 'Repairs and maintains machinery, vehicles, and mechanical equipment.'],
            ['name_post' => 'Nutritionist', 'description' => 'Provides nutrition counseling and plans healthy diets for individuals or communities.'],
            ['name_post' => 'Oceanographer', 'description' => 'Investigates the oceans, their currents, marine life, and their impact on the climate.'],
            ['name_post' => 'Pilot', 'description' => 'Operates aircraft, such as airplanes or helicopters, to transport passengers or cargo.'],
            ['name_post' => 'Chemist', 'description' => 'Investigates the properties and composition of matter, develops new chemicals, and processes.'],
            ['name_post' => 'Hotel Receptionist', 'description' => 'Welcomes guests, manages reservations, and provides information on hotel services.'],
            ['name_post' => 'Sociologist', 'description' => 'Examines human society, its institutions, and social patterns.'],
            ['name_post' => 'Occupational Therapist', 'description' => 'Helps people overcome physical and emotional limitations to participate in everyday activities.'],
            ['name_post' => 'Ultrasonographer', 'description' => 'Performs medical imaging using ultrasound to diagnose medical conditions.'],
            ['name_post' => 'Saleswoman', 'description' => 'Promotes and sells products or services to potential customers.'],
            ['name_post' => 'Web Developer', 'description' => 'Designs and develops websites, applications, and online platforms.'],
            ['name_post' => 'Carpenter', 'description' => 'Works with wood to build and repair structures and objects.'],
            ['name_post' => 'Yoga Instructor', 'description' => 'Guides students in the practice of yoga to improve physical and mental health.'],
            ['name_post' => 'Zoologist', 'description' => 'Studies animals and their habitats, classifies species, and contributes to the conservation of fauna.'],
        ];     

        DB::table('posts')->insert($posts);

    }
}