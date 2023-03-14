<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
class Students extends Model
{
    use softDeletes;
    protected $dates =['delete_at'];

    protected $table = 'students';

    protected $fillable =[
        'studentno','name','service','degree',
    ]; 

}
