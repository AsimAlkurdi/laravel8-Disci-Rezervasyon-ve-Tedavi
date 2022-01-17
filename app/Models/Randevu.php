<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Randevu extends Model
{
    use HasFactory;

    public function treatment()
    {
        return $this->belongsTo(Treatment::class, 'treatmentid');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'usersid');
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'doctorid');
    }
}
