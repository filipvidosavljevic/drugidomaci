<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    protected $fillable = ['address', 'phone', 'email', 'total_employees'];

    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }
}
