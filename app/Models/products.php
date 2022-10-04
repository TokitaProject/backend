<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
        'price',
        'categories',
        'stocks',
        'isActive',
    ];

    protected $casts = [
        'isActive' => 'boolean'
    ];
}
