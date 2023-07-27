<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\UnlistedBottle;

class Type extends Model
{
    use HasFactory;
    protected $table = 'types';
    protected $fillable = [
        'name'
    ];

    public function bottles()
    {
        return $this->hasMany(Bottle::class, 'bottle_id');
    }

    public function unlistedBottles()
    {
        return $this->belongsTo(UnlistedBottle::class, 'id', 'type_id');
    }
}
