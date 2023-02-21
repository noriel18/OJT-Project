<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{


    protected $fillable =[
        'studentno','name','service',
    ]; 

    protected $table = 'students';


}
