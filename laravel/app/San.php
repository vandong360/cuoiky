<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class San extends Model
{
    protected $table = 'san';
    protected $primaryKey = 'idSan';

    public function cha(){
        return $this->belongsTo('App\Quan', 'idQuan', 'idSan');
    }
    
    public function toDatLich(){
        return $this->hasMany('App\DatLich', 'id', 'idSan');
    }
}
