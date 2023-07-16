<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use sluggable, HasFactory;
    protected $fillable = [
        'name',
    ];

    protected $casts = [
        'image'   => 'json',
    ];

    public function toSearchableArray()
    {
        $array = $this->toArray();
        return $array;
    }
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
