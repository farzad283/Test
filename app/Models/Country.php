<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// use App\Models\UnlistedBottle;

class Country extends Model
{
    use HasFactory;
    protected $table = 'countries';
    protected $fillable = [
        'name',
    ];

    public function bottles()
    {
        return $this->hasMany(Bottle::class, 'country_id');
    }

    public function unlistedBottles()
    {
        // return $this->belongsTo(UnlistedBottle::class, 'id', 'country_id');
        return $this->hasMany(UnlistedBottle::class);
    }
}
