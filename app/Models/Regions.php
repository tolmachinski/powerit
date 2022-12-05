<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regions extends Model
{
    use HasFactory;

    protected $table = 'regions';

    public function locations()
    {
        return $this->hasMany('App\Models\Location');
    }
}
