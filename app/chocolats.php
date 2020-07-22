<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chocolats extends Model
{
    // table name
    protected $table = 'chocolats';
    // primary key
    public $primaryKey ='id';
    public $timestamps = false;
    
}
