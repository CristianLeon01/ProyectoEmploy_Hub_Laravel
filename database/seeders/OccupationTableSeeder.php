<?php

namespace Database\Seeders;

use App\Models\Occupation;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OccupationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $occupations = [ 
            ['occupation_name' => 'Doctor', 'occupation_description' => 'Health professional who diagnoses, treats and prevents diseases in patients.', 'id_post' => '1'],
            ['occupation_name' => 'Nurse', 'occupation_description' => 'Provides direct care to patients, administers medications and supports doctors in healthcare.' , 'id_post' => '1'],
            ['occupation_name' => 'Civil engineer', 'occupation_description' => 'Design, supervise and manage construction projects, such as roads, bridges and buildings.',  'id_post' => '3'],
            ['occupation_name' => 'Teacher', 'occupation_description' => 'Facilitates student learning in various subjects and educational levels.',  'id_post' => '4'],
            ['occupation_name' => 'Software Programmer', 'occupation_description' => 'Creates, develops and maintains computer software and applications.',  'id_post' => '5'],
            ['occupation_name' => 'Graphic Designer', 'occupation_description' => 'Create visual elements, such as logos, graphics, and designs, to communicate specific messages.',  'id_post' => '6'],
            ['occupation_name' => 'Chef', 'occupation_description' => 'Prepares and cooks food in restaurants or other food service environments.',  'id_post' => '7'],
            ['occupation_name' => 'Police', 'occupation_description' => 'Applies and enforces the law, protects the community, and responds to emergency situations.',  'id_post' => '15'],
            ['occupation_name' => 'Psychologist', 'occupation_description' => 'It studies human behavior and provides advice and treatment for emotional and mental problems.',  'id_post' => '14'],
            ['occupation_name' => 'Journalist', 'occupation_description' => 'Researches, writes and presents news and current events through various media outlets.',  'id_post' => '13'],
            ['occupation_name' => 'Accountant', 'occupation_description' => 'Performs accounting and finance-related tasks, such as preparing financial reports and managing records.',  'id_post' => '1'],
            ['occupation_name' => 'Architect', 'occupation_description' => 'Design and plan buildings and structures, taking into account aesthetic, functional and technical aspects.',  'id_post' => '1'],
            ['occupation_name' => 'Electrician', 'occupation_description' => 'Installs, maintains and repairs electrical systems in buildings and other structures.',  'id_post' => '1'],
            ['occupation_name' => 'Lawyer', 'occupation_description' => 'Provides legal advice, represents clients in court and negotiates legal agreements.',  'id_post' => '1'],
            ['occupation_name' => 'Pharmacist', 'occupation_description' => 'Dispenses medications and offers advice on their safe and effective use.',  'id_post' => '1'],
            ['occupation_name' => 'Actor/Actress', 'occupation_description' => 'Plays characters in theater, film or television productions.',  'id_post' => '1'],
            ['occupation_name' => 'Farmer', 'occupation_description' => 'Grow and harvest agricultural products, such as grains, fruits and vegetables',  'id_post' => '1'],
            ['occupation_name' => 'Astronomer', 'occupation_description' => 'Study space, planets, stars and other celestial phenomena.',  'id_post' => '1'],
            ['occupation_name' => 'Firefighter', 'occupation_description' => 'Responds to emergencies to put out fires, perform rescues and provide medical assistance.',  'id_post' => '1'],
            ['occupation_name' => 'Cashier', 'occupation_description' => 'Work in points of sale, process transactions and provide customer service.',  'id_post' => '1'],
            ['occupation_name' => 'Data Scientist', 'occupation_description' => 'Analyze and interpret large data sets to obtain meaningful insights.',  'id_post' => '1'],
            ['occupation_name' => 'Dentist', 'occupation_description' => 'Diagnoses and treats dental and oral problems, performs extractions, and offers preventative care.',  'id_post' => '1'],
            ['occupation_name' => 'Automotive Electrician', 'occupation_description' => 'Repairs and maintains electrical systems in vehicles, including cars and trucks.',  'id_post' => '1'],
            ['occupation_name' => 'Economist', 'occupation_description' => 'It studies economic trends, analyzes data and provides economic policy advice.',  'id_post' => '1'],
            ['occupation_name' => 'Photographer', 'occupation_description' => 'Capture creative and meaningful visual images using cameras and photography techniques.',  'id_post' => '1'],
            ['occupation_name' => 'Geologist', 'occupation_description' => 'Studies the structure and composition of the Earth, investigates natural resources and geological hazards.',  'id_post' => '1'],
            ['occupation_name' => 'Human resources manager', 'occupation_description' => 'Oversees human resources functions, including recruiting, training, and personnel management.',  'id_post' => '1'],
            ['occupation_name' => 'Aerospace/Engineer', 'occupation_description' => 'Designs and develops aircraft and space systems.',  'id_post' => '1'],
            ['occupation_name' => 'Judge', 'occupation_description' => 'Administers justice in courts, interprets the law and makes judicial decisions.',  'id_post' => '1'],
            ['occupation_name' => 'Kinesiologist', 'occupation_description' => 'Works on physical rehabilitation and movement of the body to improve health and well-being.',  'id_post' => '1'],
            ['occupation_name' => 'Linguist', 'occupation_description' => 'You study language, its structure and evolution, and can work in translation and computational linguistics.',  'id_post' => '1'],
            ['occupation_name' => 'Mechanic', 'occupation_description' => 'Repairs and maintains machinery, vehicles and mechanical equipment.',  'id_post' => '1'],
            ['occupation_name' => 'Nutritionist', 'occupation_description' => 'Provides nutrition counseling and plans healthy diets for individuals or communities.', 'id_post' => '1'],
            ['occupation_name' => 'Oceanographer', 'occupation_description' => 'Investigate the oceans, their currents, marine life and their impact on the climate.',  'id_post' => '1'],
            ['occupation_name' => 'Pilot', 'occupation_description' => 'Operates aircraft, such as airplanes or helicopters, to transport passengers or cargo',  'id_post' => '1'],
            ['occupation_name' => 'Chemist', 'occupation_description' => 'Investigates the properties and composition of matter, develops new chemicals and processes.',  'id_post' => '1'],
            ['occupation_name' => 'Hotel receptionist', 'occupation_description' => 'Welcomes guests, manages reservations, and provides information on hotel services.',  'id_post' => '1'],
            ['occupation_name' => 'Sociologist', 'occupation_description' => 'Examines human society, its institutions and social patterns.',  'id_post' => '1'],
            ['occupation_name' => 'Occupational therapist', 'occupation_description' => 'Helps people overcome physical and emotional limitations to participate in everyday activities.',  'id_post' => '1'],
            ['occupation_name' => 'Ultrasonographer', 'occupation_description' => 'Performs medical imaging using ultrasound to diagnose medical conditions.',  'id_post' => '1'],
            ['occupation_name' => 'Saleswoman', 'occupation_description' => 'Promote and sell products or services to potential customers.',  'id_post' => '1'],
            ['occupation_name' => 'Web Developer', 'occupation_description' => 'Design and develop websites, applications and online platforms.', 'id_post' => '1'],
            ['occupation_name' => 'Xylographer (Carpenter)', 'occupation_description' => 'Work with wood to build and repair structures and objects.',  'id_post' => '1'],
            ['occupation_name' => 'Yoga Instructor', 'occupation_description' => 'Guides students in the practice of yoga to improve physical and mental health.',  'id_post' => '1'],
            ['occupation_name' => 'Zoologist', 'occupation_description' => 'Study animals and their habitats, classify species and contribute to the conservation of fauna.',  'id_post' => '1'],
        ];

        foreach ($occupations as $occupationData) {
            $post = Post::firstWhere('name_post', $occupationData['occupation_name']);
            
            if ($post) {
                Occupation::create([
                    'occupation_name' => $occupationData['occupation_name'],
                    'occupation_description' => $occupationData['occupation_description'],
                    'post_id' => $post->id,
                ]);
            } else {
                echo "No se encontró el cargo correspondiente para la ocupación: " . $occupationData['occupation_name'] . "\n";
            }
        }
          
        DB::table('occupations')->insert($occupations);
    }
}
