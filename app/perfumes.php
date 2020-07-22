<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perfumes extends Model
{
    // table name
    protected $table = 'perfumes';
    // primary key
    public $primaryKey ='id';
    public $timestamps = false;
}
