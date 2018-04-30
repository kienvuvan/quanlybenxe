<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\NhaXe;
class Xe extends Model
{
    protected $table="xe";

    public function nhaxe(){
    	return $this->belongsTo('NhaXe','foreign_key');
    }
}
