<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;

    public function country () {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }

    public function sheek () {
        return $this->hasOne(Sheek::class, 'bank_id', 'id');
    }
}