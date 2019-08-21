<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $withCount = [
        'clicks',
        'clicksToday',
    ];

    public function clicks()
    {
        return $this->hasMany(Click::class);
    }

    public function clicksToday()
    {
        return $this->clicks()->whereDate('created_at', today());
    }
}
