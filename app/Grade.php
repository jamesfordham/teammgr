<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use \Esensi\Model\Model;

class Grade extends Model {

    protected $rules = [
        'sydgrade' => ['required'],
        'clubgrade' => ['required']
    ];

    //Creates relationship between 2nd object and main object (in this case Grade)
    public function player() {
        return $this->hasMany('App\Player'); //->orderBy('','desc'); //Can import data with order by clause
    }

}