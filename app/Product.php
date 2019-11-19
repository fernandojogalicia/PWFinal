<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['nombreProducto','imagePath','descripcion','price','peso','altura'];
}
