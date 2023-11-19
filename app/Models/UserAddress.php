<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    use HasFactory;

    protected $table = "user_addresses";


    protected $fillable = [
        # require
        'title',
        'address',
        'cellphone',
        'postal_code',
        'province_id',
        'city_id',
        'user_id',        
        # optional
        'longitude',
        'latitude'
    ];

}