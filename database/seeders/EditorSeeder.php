<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Editor;

class EditorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Editor::truncate();

        $editors = [
            ['page_name' => 'about',
            'bloc_id' => 1,
            'size_of_bloc' => 12,
            'index_column' => 1,
            'index_row' => 1,
            'content_of_bloc' => 'ceci est le contenu de la page about'],
            ['page_name' => 'osp',
            'bloc_id' => 1,
            'size_of_bloc' => 12,
            'index_column' => 1,
            'index_row' => 1,
            'content_of_bloc' => 'ceci est le contenu de la page orientation scolaire et professionnelle'],
            ['page_name' => 'coaching',
            'bloc_id' => 1,
            'size_of_bloc' => 12,
            'index_column' => 1,
            'index_row' => 1,
            'content_of_bloc' => 'ceci est le contenu de la page coaching'],
            ['page_name' => 'formation',
            'bloc_id' => 1,
            'size_of_bloc' => 12,
            'index_column' => 1,
            'index_row' => 1,
            'content_of_bloc' => 'ceci est le contenu de la page formation'],
            ['page_name' => 'transition',
            'bloc_id' => 1,
            'size_of_bloc' => 12,
            'index_column' => 1,
            'index_row' => 1,
            'content_of_bloc' => 'ceci est le contenu de la page formation'],
            ['page_name' => 'jobCounseling',
            'bloc_id' => 1,
            'size_of_bloc' => 12,
            'index_column' => 1,
            'index_row' => 1,
            'content_of_bloc' => 'ceci est le contenu de la page conseils en emploi'],
            ['page_name' => 'immersiveCourse',
            'bloc_id' => 1,
            'size_of_bloc' => 12,
            'index_column' => 1,
            'index_row' => 1,
            'content_of_bloc' => 'ceci est le contenu de la page stage immersif'],
            ['page_name' => 'welcome',
            'bloc_id' => 1,
            'size_of_bloc' => 12,
            'index_column' => 1,
            'index_row' => 1,
            'content_of_bloc' => 'ceci est le contenu de la page stage immersif']

        ];

        foreach($editors as $editor)
        {
            Editor::create([
                'page_name'         => $editor['page_name'],
                'bloc_id'           => $editor['bloc_id'],
                'size_of_bloc'      => $editor['size_of_bloc'],
                'index_column'      => $editor['index_column'],
                'index_row'         => $editor['index_row'],
                'content_of_bloc'   => $editor['content_of_bloc']
            ]);
        }
    }
}
