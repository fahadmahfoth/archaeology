<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Governorate extends Model
{
    protected $table = 'governorates';
    protected $fillable = ['title','image'];
}
