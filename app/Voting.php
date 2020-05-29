<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voting extends Model
{
    //
    protected $table    = 'voting';
    protected $fillable = ['username','id_periode','id_kandidat'];
}
