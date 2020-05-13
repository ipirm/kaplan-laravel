<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasTranslations;
    public $translatable = ['title'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
