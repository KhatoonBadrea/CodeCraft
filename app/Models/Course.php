<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name'
    ];


    // Relation
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
