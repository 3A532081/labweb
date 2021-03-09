<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'member';

    protected $fillable = [
        'name',
        'name_en',
        'year',
        'class',
        'skill',
        'email',
    ];
}
