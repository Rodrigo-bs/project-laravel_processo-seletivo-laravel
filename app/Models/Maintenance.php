<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;

    public function vehicle() {
        return $this->belongsTo('App\Models\Vehicle');
    }

    public function mechanical() {
        return $this->belongsTo('App\Models\Mechanical');
    }
}
