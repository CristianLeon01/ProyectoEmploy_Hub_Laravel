<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states = [
            ['state_name' => 'IN PROGRESS', 'status_description' => 'It means that the candidate or the selection process has not yet reached a conclusion. You may be in the initial stages of resume review, testing, or any preliminary phase of the recruiting process.'],
            ['state_name' => 'IN CONTRACT', 'status_description' => 'Indicates that the candidate has progressed far enough in the selection process to have signed a contract, but has not yet formally begun work.'],
            ['state_name' => 'INTERVIEW', 'status_description' => 'The candidate has been selected for an interview. It can be an intermediate stage of the selection process, where the candidates skills and suitability are assessed.'],
            ['state_name' => 'PRE-SELECTED', 'status_description' => 'It implies that the candidate has successfully passed a few selection rounds and is among the finalists for the position, but has not yet received a formal offer.'],
            ['state_name' => 'HIRED', 'status_description' => 'Indicates that the candidate has been selected and has accepted the job offer. At this point, the employee is expected to begin duties under the terms of the contract.'],
            ['state_name' => 'REFUSED', 'status_description' => 'The candidate was not selected for the position. It can be due to various reasons, such as lack of required skills, experience or the presence of more suitable candidates.'],
        ];

        DB::table('states')->insert($states);

    }
}
