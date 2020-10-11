<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Governorate extends Model
{
    protected $table = 'governorates';
    protected $fillable = ['title','image'];




    public function archaeology()
    {
        return $this->hasMany('App\Archaeology', 'city_id',);
    }
}
