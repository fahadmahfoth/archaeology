<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archaeology extends Model
{
    protected $table = 'archaeology';
    protected $fillable = ['title','description','archaeology_type','image','location'];



}
