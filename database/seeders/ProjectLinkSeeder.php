<?php

namespace Database\Seeders;

use App\Models\ProjectLink;
use Illuminate\Database\Seeder;

class ProjectLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProjectLink::create([
            'link_name' => 'Gitlab',
            'link_url' => 'https://gitlab.com/ismaelalwi66/final-project-laravel',
            'project_id' => 1,
        ]);

        ProjectLink::create([
            'link_name' => 'Vercel',
            'link_url' => 'https://indiedu-nuxt.vercel.app/',
            'project_id' => 2,
        ]);
    }
}
