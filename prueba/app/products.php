<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected$fillable = ['name', 'code', 'price', 'status'];
}
