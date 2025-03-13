<?php

namespace Database\Seeders;

use App\Models\Team;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // User::create(['nom'=>'aamir','prenom'=>'elamiri','age'=> 29,'pois'=>70,'foot'=>'gooch','updated_at'=>now(),'created_at'=>now()]);
        Team::create([
            'nom'=>'realmadrid',
        'pays'=>'madrid',
        'date_creation'=>1937,
        "user_id"=>1
        ,'updated_at'=>null,
        'created_at'=>now()
    ]);
    

    }
}
