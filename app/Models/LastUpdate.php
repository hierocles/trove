<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LastUpdate extends Model
{
    protected $table = 'lastupdate';
    protected $guarded = [];
    public $timestamps = true;
}
