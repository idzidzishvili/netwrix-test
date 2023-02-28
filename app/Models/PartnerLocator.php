<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerLocator extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    protected $table = 'partner_locator';
}
