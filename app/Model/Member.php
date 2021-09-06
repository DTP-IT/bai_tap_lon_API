<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'class_id', 'name', 'gender', 'dOB','address', 'avatar', 'phone', 'email','dead_card'
    ];
    protected $table = 'members';
}
