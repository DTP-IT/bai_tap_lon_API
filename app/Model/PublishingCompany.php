<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PublishingCompany extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'title', 'note'
    ];
    protected $table = 'publishing_companys';
}
