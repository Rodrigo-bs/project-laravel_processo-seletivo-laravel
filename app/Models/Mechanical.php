<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanical extends Model
{
    use HasFactory;

    public function maintenances() {
        return $this->hasMany('App\Models\Maintenance');
    }
}