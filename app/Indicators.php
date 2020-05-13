<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Indicators extends Model
{
    use HasTranslations;
    public $translatable = ['text','link'];
}
