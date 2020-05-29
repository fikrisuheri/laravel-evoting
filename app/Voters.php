<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voters extends Model
{
    //
    protected $table = 'pemilih';
    protected $fillable = ['username','periode','status'];

    public function status()
    {
    	return $this->hasOne('App\Status');
    }
}
