<?php

use Illuminate\Database\Seeder;

class AirsoftSitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\AirsoftSite::class, 5)->create();
    }
}
