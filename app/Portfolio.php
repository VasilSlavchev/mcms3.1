<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    public function pfcategory() {
        return $this->belongsTo('App\Pfcategory');
    }
}
