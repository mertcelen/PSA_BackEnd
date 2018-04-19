<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Product extends Eloquent
{
    protected $fillable = ['brand', 'color', 'image', 'link', 'type'];
    protected $collection = 'products';
    protected $connection = 'mongodb';
}
