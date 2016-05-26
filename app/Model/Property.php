<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'properties';

    function rooms(){
    	return $this->hasMany('App\Model\PropertyRooms', 'property_id', 'property_id');
    }
}
