<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Teamseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Team::create([
            'nom'=>'realmadrid',
        'pays'=>'madrid',
        'date_creation'=>1937,
        "user_id"=>1
    ]);
            
      
    }
}
