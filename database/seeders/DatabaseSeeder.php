<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Models\Client;
use App\Models\User;
use App\Models\Editor;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Client::truncate();

        $this->call(ClientSeeder::class);
        $this->call(ProfessionalstatuSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(EditorSeeder::class);
    }
}
