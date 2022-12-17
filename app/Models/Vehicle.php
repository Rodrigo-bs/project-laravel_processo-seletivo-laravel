<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'model',
        'license',
        'images',
        'characteristics',
        'cpf'
    ];
    
    public function maintenances() {
        return $this->hasMany('App\Models\Maintenance');
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function typevehicle() {
        return $this->belongsTo('App\Models\Typevehicle');
    }
}
