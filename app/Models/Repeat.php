<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repeat extends Model
{
    use HasFactory;
    protected $table = 'repeats';

    protected $guarded = [''];

    public function invest()
    {
        return $this->belongsTo(Investment::class,'investment_id');
    }
}
