<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Teacher extends Model
{
  use HasFactory;
  use Sluggable;

  protected $fillable = [
    'name',
    'jabatan',
    'slug',
    'cover',
  ];

  public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
