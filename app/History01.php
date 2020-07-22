<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History01 extends Model
{
    protected $guarded = array('id');
    
    protected $table = 'history01';
    
    public static $rules = array(
        'profile_id' => 'required',
        'edited_at' => 'required',
    );
}
