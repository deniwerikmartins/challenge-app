<?php

namespace Database\Seeders;

use App\Models\Aparelho;
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
         Aparelho::factory(10)->create();
    }
}
