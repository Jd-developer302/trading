<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WithdrawMethod extends Model
{
    use HasFactory;
    protected $table = 'withdraw_methods';

    protected $fillable = ['name','image','fix','percent','duration','status','withdraw_min','withdraw_max'];
}
