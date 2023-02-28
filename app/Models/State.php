<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'loc_state';
    protected $primaryKey = 'state_id';

    public function country(){
        return $this->belongsTo(Country::class);
    }
}
