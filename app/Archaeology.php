<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archaeology extends Model
{
    protected $table = 'archaeology';
    protected $fillable = ['title','city_id','description','image','location'];




    public function governorates()
    {
        return $this->belongsTo('App\Governorate', 'city_id',);
    }





}
