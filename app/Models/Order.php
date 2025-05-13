<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'address_name',
        'address_line1',
        'address_line2',
        'city',
        'state',
        'postal_code',
        'country',
        'phone_number',
        'status',
        'total'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
