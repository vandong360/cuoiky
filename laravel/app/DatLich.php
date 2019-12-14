<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatLich extends Model
{
    protected $table = 'book';
    protected $fillable = [
        'idUser',
        'idSan', 
        'tenKH',
        'sdt',
        'date',
        'time',
        'note'
    ];

    public function callUsers() {
        return $this->belongsTo('App\User', 'id', 'id');
    }
    
    public function callSan() {
        return $this->belongsTo('App\User', 'idSan', 'id');
    }
}
