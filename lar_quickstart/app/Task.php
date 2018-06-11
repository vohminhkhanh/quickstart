<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    //

    protected $table = 'Task';
    public $primaryKey = 'id';
    public $incrementing = false;
    protected $fillable = ['name'];
    
}
