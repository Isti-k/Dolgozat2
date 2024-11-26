<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agencie extends Model
{
    protected $primaryKey = 'agency_id';
    protected $fillable = [
        'name',
        'country',
        'type',
    ];
}
