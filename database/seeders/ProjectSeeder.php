<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([
            'title' => 'Mini Social Media - Final Project JCC Online',
            'excerpt' => 'Mini Social Media, the name of this web is JCC Media. My role is backend.',
            'image_url' => 'images/home_page_sosmed.png',
            'body' => 'This is my first laravel project. I work with my friends for this project. We made it for our final project on JCC Online Bootcamp. What i do in this project ? I handle the authentication feature, backend and a little bit editing the frontend for login and register page.'
        ]);
        Project::create([
            'title' => 'Indiedu - E-learning Platform for home-schooling',
            'excerpt' => 'Indiedu, in this project i work with my team it divide into backend, frontend, and mobile apps.',
            'image_url' => 'images/dashboard-siswa.png',
            'body' => 'This is my second project in JCC which I do with my team. We made it for our practice, we implemented the SCRUM method. We did the daily stand up meeting and we did the sprint planning. I made API also the documentation, use AWS S3 for storage, and deploy to Heroku.'
        ]);
    }
}
