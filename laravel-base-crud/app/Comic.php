<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'thumb',
        'title',
        'description',
        'series',
        'date',
        'type',
        'price'
    ];
}
