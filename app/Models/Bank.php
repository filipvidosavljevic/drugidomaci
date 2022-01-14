<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'headquaters', 'email', 'director'];

    public function bankCategory()
    {
        return $this->belongsTo(BankCategory::class);
    }
}
