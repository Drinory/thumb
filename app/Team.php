<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    // Filable columns 
    protected $fillable = [ 
        'name',
        'description',
        'image',
        'role',
        'instagram',
        'facebook'
    ];
}
