<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       User::create(['nom'=>'aamir','prenom'=>'elamiri','age'=> 29,'pois'=>70,'foot'=>'gooch']);
    }
}
