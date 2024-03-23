<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'email',
        'address',
        'city',
        'postcode',
        'state',
        'country',
    ];
    use HasFactory;
}
