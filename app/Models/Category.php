<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $appends =[
        'parent'
    ];


    public function treatment()
    {
        return $this->hasMany(Treatment::class);
    }

    public function parent()
    {
        return $this->belongsTo(Category::class,'usd_id');
    }
     public function children()
    {
        return $this->hasMany(Category::class,'usd_id');
    }
}
