<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClothingItem extends Model
{
    protected $fillable = ['name','brand','size' ,'category', 'description'];
}
