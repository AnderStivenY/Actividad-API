<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class formation_programs extends Model
{
protected $table='formation_programs';
protected $primarykey='id';
protected $fillable=['name','abbreviation'];
}
