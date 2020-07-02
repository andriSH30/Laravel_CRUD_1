<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    //
    protected $guarded = ['id'];

    public function jawaban(){
        return $this->hasMany('App\Jawaban');
    }
}
