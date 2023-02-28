<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    protected $table = 'loc_country';
    protected $primaryKey = 'country_id';

    public function state(){
        return $this->hasMany(State::class);
    }
}
