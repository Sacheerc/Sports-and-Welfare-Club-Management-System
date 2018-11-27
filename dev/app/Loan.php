<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $fillable = ['epfnum','guarantor01','guarantor02','chequenum',];
}
