<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Brewery
 */
class Brewery extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function beer()
    {
        return $this->hasMany('App\Beer');
    }
}
