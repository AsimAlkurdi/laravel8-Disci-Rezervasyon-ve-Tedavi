<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    /**
     * @var array
     */

    protected $fillable =[
      'treatmentid',
        'usersid',
        'comment',
        'ip',
        'subject',
   ];

    public function treatmentt()
    {
        return $this->belongsTo(Treatment::class, 'treatmentid');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'usersid');
    }
}
