<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function asrama() 
    {
        return $this->belongsTo(Asrama::class);
    }
    public function transaksi() 
    {
        return $this->hasMany(Transaksi::class);
    }
}
