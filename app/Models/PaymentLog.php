<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentLog extends Model
{
    use HasFactory;
    protected $table = 'payment_logs';

    protected $fillable = ['amount','member_id','custom','usd','payment_type','net_amount','charge',];

    public function payment()
    {
        return $this->belongsTo(PaymentMethod::class,'payment_type');
    }
}
