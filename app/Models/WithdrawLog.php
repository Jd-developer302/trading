<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WithdrawLog extends Model
{
    use HasFactory;
    protected $table = 'withdraw_logs';

    protected $fillable = ['user_id','transaction_id','method_id','amount','charge','send_details','message','status','net_amount','message'];

    public function method()
    {
        return $this->belongsTo(WithdrawMethod::class,'method_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
