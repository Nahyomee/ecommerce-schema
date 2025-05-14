<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VendorReview extends Model
{
    protected $fillable = [
        'vendor_id',
        'user_id',
        'rating',
        'comment'
    ];

    public function reviewer()
    {
        return $this->belongsTo(User::class);
    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }
}
