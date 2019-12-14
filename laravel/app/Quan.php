<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quan extends Model
{
    protected $table = 'quan';
    protected $primaryKey = 'idQuan';
    public function data(){
        return $this->hasMany('App\San', 'idQuan', 'idQuan');
    }
}
