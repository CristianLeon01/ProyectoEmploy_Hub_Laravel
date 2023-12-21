<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AbilityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $abilities = [

            ['skill_name' => 'Diagnosis and Medical Treatment', 'skill_description' => 'Ability to diagnose illnesses, develop treatment plans, and provide medical care to patients.', 'occupation_name' => 'Doctor'],
            ['skill_name' => 'Patient Care and Medication Administration', 'skill_description' => 'Proficiency in direct patient care, medication administration, and collaboration with the medical team.', 'occupation_name' => 'Nurse'],
            ['skill_name' => 'Design and Management of Construction Projects', 'skill_description' => 'Ability to design and supervise construction projects, ensuring the efficiency and safety of structures.', 'occupation_name' => 'Civil engineer'],
            ['skill_name' => 'Learning Facilitation', 'skill_description' => 'Ability to impart knowledge effectively, adapting to different learning styles and educational levels', 'occupation_name' => 'Teacher'],
            ['skill_name' => 'Software Development and Coding', 'skill_description' => 'Competence in the creation, development and maintenance of software and computer applications through programming.', 'occupation_name' => 'Software Programmer'],
            ['skill_name' => 'Visual Design and Graphic Communication', 'skill_description' => 'Skill in creating engaging visual elements, such as logos, graphics, and designs, to convey specific messages.', 'occupation_name' => 'Graphic Designer'],
            ['skill_name' => 'Preparación y Cocina de Alimentos', 'skill_description' => 'Competence in food preparation and presentation, as well as knowledge of culinary techniques.', 'occupation_name' => 'Chef'],
            ['skill_name' => 'Law Enforcement and Emergency Response', 'skill_description' => 'Ability to enforce the law, protect the community, and respond effectively to emergency situations.', 'occupation_name' => 'Police'],
            ['skill_name' => 'Psychological Evaluation and Counseling', 'skill_description' => 'Competence in evaluating human behavior, providing advice and treatment for emotional and mental problems.', 'occupation_name' => 'Psychologist'],
            ['skill_name' => 'Research and News Communication', 'skill_description' => 'Ability to research, write and present news and current events through various media outlets.', 'occupation_name' => 'Journalist'],
            ['skill_name' => 'Accounting and Financial Analysis', 'skill_description' => 'Competence in performing accounting tasks, preparing financial reports and analyzing the financial situation of an entity.', 'occupation_name' => 'Accountant'],
            ['skill_name' => 'Architectural Design and Planning', 'skill_description' => 'Ability to design buildings and structures, considering aesthetic, functional and technical aspects.', 'occupation_name' => 'Architect'],
            ['skill_name' => 'Electrical Installation and Maintenance', 'skill_description' => 'Proficiency in installing, maintaining and repairing electrical systems in buildings and other structures.', 'occupation_name' => 'Electrician'],
            ['skill_name' => 'Legal Advice and Representation', 'skill_description' => 'Ability to provide legal advice, represent clients in court, and negotiate legal agreements.', 'occupation_name' => 'Lawyer'],
            ['skill_name' => 'Medication Dispensing and Counseling', 'skill_description' => 'Competence in dispensing medications and providing advice on their safe and effective use.', 'occupation_name' => 'Pharmacist'],
            ['skill_name' => 'Acting Interpretation and Emotional Expression', 'skill_description' => 'Ability to play characters convincingly, transmitting emotions and messages through acting.', 'occupation_name' => 'Actor/Actress'],
            ['skill_name' => 'Cultivation and Harvesting of Agricultural Products', 'skill_description' => 'Proficiency in growing and harvesting agricultural products, managing land and crops.', 'occupation_name' => 'Farmer'],
            ['skill_name' => 'Astronomical Observation and Data Analysis', 'skill_description' => 'Ability to study space, make astronomical observations and analyze celestial data.', 'occupation_name' => 'Astronomer'],
            ['skill_name' => 'Fire Fighting and Rescue', 'skill_description' => 'Proficiency in responding to emergencies to put out fires, perform rescues and provide medical assistance.', 'occupation_name' => 'Firefighter'],
            ['skill_name' => 'Transaction Processing and Customer Service', 'skill_description' => 'Proficiency in processing financial transactions and offering customer service at points of sale.', 'occupation_name' => 'Cashier'],
            ['skill_name' => 'Data Analysis and Programming', 'skill_description' => 'Proficiency in analyzing large data sets and developing algorithms using programming skills.', 'occupation_name' => 'Data Scientist'],
            ['skill_name' => 'Dentistry and Dental Procedures', 'skill_description' => 'Proficiency in diagnosing and treating dental and oral problems, performing dental procedures.', 'occupation_name' => 'Dentist'],
            ['skill_name' => 'Repair of Electrical Systems in Vehicles', 'skill_description' => 'Proficiency in repairing and maintaining electrical systems in vehicles, including cars and trucks.', 'occupation_name' => 'Automotive Electrician'],
            ['skill_name' => 'Economic Analysis and Advice', 'skill_description' => 'Ability to study economic trends, analyze data, and provide economic policy advice.', 'occupation_name' => 'Economist'],
            ['skill_name' => 'Photography and Visual Composition', 'skill_description' => 'Proficiency in capturing creative and meaningful visual images using cameras and photographic techniques.', 'occupation_name' => 'Photographer'],
            ['skill_name' => 'Geology and Natural Resources Research', 'skill_description' => 'Competence in studying the structure of the Earth, investigating natural resources and analyzing geological risks.', 'occupation_name' => 'Geologist'],
            ['skill_name' => 'Human Resources and Labor Relations Management', 'skill_description' => 'Ability to supervise human resources functions, including recruiting, training, and personnel management.', 'occupation_name' => 'Human resources manager'],
            ['skill_name' => 'Aircraft Design and Development', 'skill_description' => 'Ability to design and develop aircraft and space systems.', 'occupation_name' => 'Aerospace/Engineer'],
            ['skill_name' => 'Administration of Justice and Legal Interpretation', 'skill_description' => 'Ability to administer justice in court, interpret the law and make judicial decisions.', 'occupation_name' => 'Judge'],
            ['skill_name' => 'Physical Rehabilitation and Occupational Therapy', 'skill_description' => 'Competence in working on physical rehabilitation and improving body movement through therapies.', 'occupation_name' => 'Kinesiologist'],
            ['skill_name' => 'Language Study and Translation', 'skill_description' => 'Competence in studying language, its structures and evolution, and in working in translation and linguistic analysis.', 'occupation_name' => 'Linguist'],
            ['skill_name' => 'Mechanical Repair and Maintenance', 'skill_description' => 'Proficiency in repairing and maintaining machinery, vehicles and mechanical equipment.', 'occupation_name' => 'Mechanic'],
            ['skill_name' => 'Nutritional Counseling and Diet Planning', 'skill_description' => 'Proficiency in providing nutrition advice and planning healthy diets.', 'occupation_name' => 'Nutritionist'],
            ['skill_name' => 'Ocean Research and Conservation', 'skill_description' => 'Competence in researching the oceans, their currents and marine life, and contributing to the conservation of marine ecosystems.', 'occupation_name' => 'Oceanographer'],
            ['skill_name' => 'Aircraft Operation and Navigation', 'skill_description' => 'Ability to operate aircraft, ensuring safe and efficient flights.', 'occupation_name' => 'Pilot'],
            ['skill_name' => 'Chemical Research and Product Development', 'skill_description' => 'Proficiency in investigating the composition of matter, developing chemical products and performing chemical analysis.', 'occupation_name' => 'Chemist'],
            ['skill_name' => 'Customer Service and Reservation Management', 'skill_description' => 'Proficient in welcoming guests, managing reservations and providing information on hotel services.', 'occupation_name' => 'Hotel receptionist'],
            ['skill_name' => 'Social Analysis and Research', 'skill_description' => 'Competence in examining human society, investigating institutions and social patterns.', 'occupation_name' => 'Sociologist'],
            ['skill_name' => 'Occupational Therapy and Rehabilitation', 'skill_description' => 'Competence in helping people overcome physical and emotional limitations to participate in everyday activities.', 'occupation_name' => 'Occupational therapist'],
            ['skill_name' => 'Ultrasound Medical Imaging', 'skill_description' => 'Proficiency in performing medical imaging using ultrasound to diagnose medical conditions.', 'occupation_name' => 'Ultrasonographer'],
            ['skill_name' => 'Sales and Customer Relations', 'skill_description' => 'Competence in promoting and selling products or services, managing customer relationships.', 'occupation_name' => 'Saleswoman'],
            ['skill_name' => 'Web Development and Programming', 'skill_description' => 'Proficiency in designing and developing websites, applications and online platforms programmatically.', 'occupation_name' => 'Web Developer'],
            ['skill_name' => 'Woodworking and Construction', 'skill_description' => 'Proficiency in working with wood to build and repair structures and objects.', 'occupation_name' => 'Xylographer (Carpenter)'],
            ['skill_name' => 'Yoga Teaching and Physical and Mental Wellbeing', 'skill_description' => 'Proficiency in guiding students in the practice of yoga to improve physical and mental health.', 'occupation_name' => 'Yoga Instructor'],
            ['skill_name' => 'Animal Study and Conservation', 'skill_description' => 'Competence in studying animals, classifying species and contributing to the conservation of fauna.', 'occupation_name' => 'Zoologist'],
        ];

        foreach ($abilities as $data) {
            $occupationId = DB::table('occupations')->where('occupation_name', $data['occupation_name'])->value('id');
    
            if ($occupationId !== null) {
                DB::table('abilities')->insert([
                    'skill_name' => $data['skill_name'],
                    'skill_description' => $data['skill_description'],
                    'id_occupations' => $occupationId,
                    'occupation_name' => $data['occupation_name'],
                ]);
            } else {
                throw new \Exception("No se encontró el ID de ocupación para {$data['occupation_name']}");
            }
        }
    }
}
