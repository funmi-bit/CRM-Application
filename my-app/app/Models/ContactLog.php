<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactLog extends Model
{
    use HasFactory;

    protected $table = 'contact_logs'; 

    protected $fillable = [
        'customer_first_name',
        'customer_last_name',
        'customer_phone',
        'customer_email',
        'product_id',
        'subject',
        'message'
    ];
}
