<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelEvent extends Model
{
    protected $table = 'Event';
    
    protected $fillable = ['title','local','value','info','id_user'];

    public function relUsers(){
        return $this->hasOne('App\Models\User','id','id_user');
    }
}