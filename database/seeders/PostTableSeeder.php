<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            ['name_post' => 'Healthcare', 'description' => 'Professions related to healthcare.'],
            ['name_post' => 'Engineering', 'description' => 'Professions related to design and construction.'],
            ['name_post' => 'Technology', 'description' => 'Professions related to information technology and technology.'],
            ['name_post' => 'Art and Design', 'description' => 'Professions related to creativity and visual design.'],
            ['name_post' => 'Hospitality', 'description' => 'Professions related to the hotel and restaurant industry.'],
            ['name_post' => 'Security', 'description' => 'Professions related to public protection and security.'],
            ['name_post' => 'Social Sciences', 'description' => 'Professions related to the study of society and human behavior.'],
            ['name_post' => 'Media', 'description' => 'Professions related to the production and distribution of information.'],
            ['name_post' => 'Finance', 'description' => 'Professions related to financial and accounting management.'],

            ['name_post' => 'Services', 'description' => 'Professions related to customer service and general services.'],
            ['name_post' => 'Legal', 'description' => 'Professions related to law and legal representation.'],
            ['name_post' => 'Natural Sciences', 'description' => 'Professions related to the study of nature and the environment.'],

            ['name_post' => 'Education', 'description' => 'Professions related to teaching and education.'],
            ['name_post' => 'Agriculture', 'description' => 'Professions related to agricultural and livestock production.'],
            ['name_post' => 'Transportation', 'description' => 'Professions related to the transportation of people and goods.'],
            ['name_post' => 'Medicine', 'description' => 'Professions related to healthcare and medicine.'],
        ];        

        foreach ($posts as $postData) {
            Post::create([
                'name_post' => $postData['name_post'],
                'description' => $postData['description'],
            ]);
        }
    }
}