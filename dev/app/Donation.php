<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    public $incrementing = false;
    public $primaryKey='epfnum';
    protected $fillable = ['epfnum', 'reason', 'amount','chequenum'];
}
