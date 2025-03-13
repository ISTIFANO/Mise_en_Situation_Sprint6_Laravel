<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable=['nom','pays','date_creation'];
    protected $table ="teams";


    public function users(){

        return $this->hasMany(User::class);
    }

}
