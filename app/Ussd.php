<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ussd extends Model{

    protected $table = 'ussd';
    
    protected $hidden = array('id','created_at','updated_at');
}
