<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyerAddress extends Model
{
    use HasFactory;
    protected $fillable = [
        'buyer_id',
        'name',
        'post_code',
        'country_id',
        'prefecture',
        'city',
        'chome',
        'building',
        'room_no',
        'phone',
        'place',
        'default',
        'main_address',
        'created_at',
        'updated_at',
    ];

    function country() {
        return $this->belongsTo(Country::class);
    }
}