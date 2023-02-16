<?php

namespace Database\Seeders;

use App\Models\Professionalstatu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;


class ProfessionalstatuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Professionalstatu::truncate();
        Schema::enableForeignKeyConstraints();

        $professionalstatu = [
            ['professionalstatuname' => 'En formation'],
            ['professionalstatuname' => 'En emploi'],
            ['professionalstatuname' => 'Sans-emploi'],
            ['professionalstatuname' => 'Sans formation']
        ];

        foreach($professionalstatu as $professionalstat)
        {
            Professionalstatu::create([
                'professionalstatuname' => $professionalstat['professionalstatuname']
            ]);
        }
    }
}
