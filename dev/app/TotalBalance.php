<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TotalBalance extends Model
{
    protected $fillable = [
        'total', 'operationvalue', 'type'
    ];
}
