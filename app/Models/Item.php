<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['name', 'material', 'size', 'condition', 'status', 'cod_image', 'price'];
}
