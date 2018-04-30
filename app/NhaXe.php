<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Xe;

class NhaXe extends Model
{
    protected $table="chuxe";

    public function xe(){
    	return $this->hasMany('Xe');
    }
}