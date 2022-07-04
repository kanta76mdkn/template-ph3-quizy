<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert(
            [
                // 東京
                ['big_question_id' => '1',
                'image' => 'takanawa.png',
                ],
                ['big_question_id' => '1',
                'image' => 'kameido.png',
                ],
                ['big_question_id' => '1',
                'image' => 'kozhimathi.png',
                ],
                // 広島
                ['big_question_id' => '2',
                'image' => 'mukaihara.png',
                ],
                ['big_question_id' => '2',
                'image' => 'mitugi.png',
                ],
                ['big_question_id' => '2',
                'image' => 'kanayama.png',
                ],
            ]    
            );
    }
}
