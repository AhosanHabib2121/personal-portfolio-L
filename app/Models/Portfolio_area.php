<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Portfolio_area extends Model
{
    use HasFactory,SoftDeletes;

    function relationTocategory()
    {
        return $this->hasOne(Category::class,'id','category_id');
    }
}
