<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    use HasFactory;
    protected $table = 'investments';

    protected $guarded = [''];

    public function plan()
    {
        return $this->belongsTo(Plan::class,'plan_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
