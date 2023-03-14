<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class display extends Model
{
    protected $table = 'students';

    protected $fillable =[
        'studentno','name','service',
    ]; 
}
