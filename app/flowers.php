<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class flowers extends Model
{
    // table name
    protected $table = 'flowers';
    // primary key
    public $primaryKey ='id';
    public $timestamps = false;
}
