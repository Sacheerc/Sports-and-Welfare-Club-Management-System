<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    public $timestamps = false;
    public $incrementing = false;
    public $primaryKey='epfNumber';
    protected $fillable = ['firstName', 'lastName', 'gender','department','email','contact','address',
    'epfNumber'];
}
