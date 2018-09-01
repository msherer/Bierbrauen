<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Beer
 */
class Beer extends Model
{
    /**
     * @return void
     */
    public function brewery()
    {
        $this->belongsTo('App\Brewery');
    }
}
