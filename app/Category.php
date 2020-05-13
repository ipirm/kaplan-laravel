<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasTranslations;
    public $translatable = ['title','text'];

    public function products()
    {
     return  $this->hasMany('App\Product');
    }
}
