<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Panificadora extends Model
{
    protected $table ='panificadoras';
    protected $primaryKey='panificadora_id';
    public $timestamps=true;
}
