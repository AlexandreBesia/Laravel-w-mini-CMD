<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

use App\Models\Client;
use Carbon\Carbon;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        Schema::disableForeignKeyConstraints();
        Client::truncate();
        Schema::enableForeignKeyConstraints();

        $clients = [
            ['last_name'=>'Besia',
            'first_name'=>'Alexandre',
            'phone_number'=>'+41764004854',
            'email'=>'testemail@gmail.com',
            'birth_date'=>Carbon::create('2000', '01', '01'),
            'professionalstatu_id' => 1,
            'type_of_service' => NULL,
            'duration_and_date_of_consultation' => NULL,
            'due_date' => Carbon::create('2000', '01', '01'),
            'personal_note' => NULL],

            ['last_name'=>'Ducomun',
            'first_name'=>'Jean',
            'phone_number'=>'+41767004050',
            'email'=>'test2email@gmail.com',
            'birth_date'=>Carbon::create('2020', '08', '01'),
            'professionalstatu_id' => 2,
            'type_of_service' => NULL,
            'duration_and_date_of_consultation' => NULL,
            'due_date' => Carbon::create('2000', '01', '01'),
            'personal_note' => NULL],

            ['last_name'=>'Ducomun2',
            'first_name'=>'Jean2',
            'phone_number'=>'+41767004052',
            'email'=>'test3email@gmail.com',
            'birth_date'=>Carbon::create('2000', '08', '01'),
            'professionalstatu_id' => 1,
            'type_of_service' => NULL,
            'duration_and_date_of_consultation' => NULL,
            'due_date' => Carbon::create('2000', '01', '01'),
            'personal_note' => NULL],

            ['last_name'=>'Ducomun3',
            'first_name'=>'Jean3',
            'phone_number'=>'+41767004053',
            'email'=>'test4email@gmail.com',
            'birth_date'=>Carbon::create('1856', '08', '01'),
            'professionalstatu_id' => 1,
            'type_of_service' => NULL,
            'duration_and_date_of_consultation' => NULL,
            'due_date' => Carbon::create('2000', '01', '01'),
            'personal_note' => NULL],

            ['last_name'=>'Ducomun6',
            'first_name'=>'Jean6',
            'phone_number'=>'+41767004056',
            'email'=>'test6email@gmail.com',
            'birth_date'=>Carbon::create('1956', '08', '01'),
            'professionalstatu_id' => 1,
            'type_of_service' => NULL,
            'duration_and_date_of_consultation' => NULL,
            'due_date' => Carbon::create('2000', '01', '01'),
            'personal_note' => NULL],

            ['last_name'=>'Ducomun8',
            'first_name'=>'Jean8',
            'phone_number'=>'+41767004058',
            'email'=>'test8email@gmail.com',
            'birth_date'=>Carbon::create('1999', '08', '01'),
            'professionalstatu_id' => 4,
            'type_of_service' => NULL,
            'duration_and_date_of_consultation' => NULL,
            'due_date' => Carbon::create('2000', '01', '01'),
            'personal_note' => NULL],

            ['last_name'=>'Ducomun42',
            'first_name'=>'Jean42',
            'phone_number'=>'+41767004042',
            'email'=>'test42email@gmail.com',
            'birth_date'=>Carbon::create('1980', '08', '01'),
            'professionalstatu_id' => 3,
            'type_of_service' => NULL,
            'duration_and_date_of_consultation' => NULL,
            'due_date' => Carbon::create('2000', '01', '01'),
            'personal_note' => NULL],
        ];

        foreach($clients as $client)
        {
            Client::create([
                'last_name' => $client['last_name'],
                'first_name' => $client['first_name'],
                'phone_number' => $client['phone_number'],
                'email' => $client['email'],
                'birth_date' => $client['birth_date'],
                'professionalstatu_id' => $client['professionalstatu_id'],
                'type_of_service' => $client['type_of_service'],
                'duration_and_date_of_consultation' => $client['duration_and_date_of_consultation'],
                'due_date' => $client['due_date'],
                'personal_note' => $client['personal_note']
            ]);
        }
        */
    }
}
