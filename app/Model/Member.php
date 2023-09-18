<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable= [
        "full_name",'email','comment'
    ];
}
