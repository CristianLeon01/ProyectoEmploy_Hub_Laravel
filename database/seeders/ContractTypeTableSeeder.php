<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContractTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contract_types = [
            ['contract_name' => 'Permanent employment contract', 'description' => 'It is an employment agreement without a specific end date. The employee is hired on a continuous basis and there is no predetermined duration for the employment relationship.'],
            ['contract_name' => 'Temporary employment contract:', 'description' => 'This type of contract has a specific duration. The employee is hired to work for a certain period, and at the end of that time, the contract can be renewed or terminated.'],
            ['contract_name' => 'Full time contract', 'description' => 'In this contract, the employee works a number of hours that is considered full time according to the countrys labor laws. It usually involves a standard work day.'],
            ['contract_name' => 'Contrato a tiempo parcial', 'description' => 'In this type of contract, the employee works a number of hours less than the full-time standard. The workload may vary, but is generally less than a full day.'],
            ['contract_name' => 'Contract work or service', 'description' => 'It is used when the employee is hired to perform a specific job or for a specific project. Once the task or project is completed, the contract can end.'],
            ['contract_name' => 'Temporary contract due to production circumstances', 'description' => 'Similar to a work or service contract, this contract is used when the company needs to temporarily cover an increase in workload due to specific circumstances, such as production peaks.'],
            ['contract_name' => 'Training and learning contract', 'description' => 'Intended for the professional training of an employee. It combines theoretical training with work practice and usually has a specific duration.'],
            ['contract_name' => 'Internship contract', 'description' => 'Designed to provide work experience to students or recent graduates. It is usually of limited duration and is intended to ease the individuals transition into the labor market.'],
            ['contract_name' => 'Contract for an indefinite period with a trial period', 'description' => 'Similar to the indefinite contract, but includes a trial period at the beginning, during which both parties can evaluate the suitability of the employment relationship.'],
            ['contract_name' => 'Contrato de servicios profesionales', 'description' => 'It is used to hire independent professionals or companies to provide specialized services. It can have a fixed or indeterminate duration.']
        ];

        DB::table('contract_types')->insert($contract_types);
    }
}
