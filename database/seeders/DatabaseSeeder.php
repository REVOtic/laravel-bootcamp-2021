<?php

namespace Database\Seeders;

use App\Models\contacts;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        contacts::factory()->count(50)->create();
    }
}
