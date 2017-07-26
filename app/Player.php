<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use \Esensi\Model\Model;

class Player extends Model
{
    protected $rules = [
        'fname' => ['required'],
        'lname' => ['required']
    ];
}
