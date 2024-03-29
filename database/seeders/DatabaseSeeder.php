<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Functionn;
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

        $this->call(UserTypeTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(StateTableSeeder::class);
        $this->call(ContractTypeTableSeeder::class);
        $this->call(OccupationTableSeeder::class);
        $this->call(FuntionTableSeeder::class);
        $this->call(DenominationTableSeeder::class);
        $this->call(AbilityTableSeeder::class);
        $this->call(RelationTableSeeder::class);
        $this->call(KnowledgeTableSeeder::class);
        $this->call(PostTableSeeder::class);
        $this->call(DepartmentTableSeeder::class);
        $this->call(CityTableSeeder::class);
        $this->call(MunicipalitySeeder::class);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
