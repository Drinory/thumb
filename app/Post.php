<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'text',
        'image',
        'category',
        'firstpage',
        'favorite'
    ];

    public function getCategoryAttribute($kategoria){
        switch($kategoria){
            case 1:
                return "Keqperdorimet";
            break;

            case 2:
                return "Korrupsionin";
            break;

            case 3:
                return "Partite Politike";
            break;

            default: return "E Pergjithshme" ;
        } 
    }

    public function getOriginalCategoryAttribute()
    {
        return $this->attributes['category'];
    }
}
