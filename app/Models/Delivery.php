<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Delivery extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'order_id', 'address_id', 'delivery_time', 'status', 'delivery_person_id', 'delivery_notes',
    ];

    /**
     * Get the order associated with the delivery.
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    /**
     * Get the address associated with the delivery.
     */
    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    /**
     * Get the delivery person associated with the delivery.
     */
    public function deliveryPerson()
    {
        return $this->belongsTo(User::class, 'delivery_person_id');
    }
}
