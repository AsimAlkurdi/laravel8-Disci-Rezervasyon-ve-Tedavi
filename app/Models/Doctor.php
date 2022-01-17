<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    public function userr()
    {
        return $this->belongsTo(User::class, 'usersid');
    }
    public function randevu()
    {
        return $this->hasMany(Randevu::class);
    }
}
