<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BottleInCellar extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'bottle_in_cellars';
    protected $fillable = [
        'unlisted_bottle_id',
        'bottle_id',
        'cellar_id',
        'quantity'
    ];



    
}
