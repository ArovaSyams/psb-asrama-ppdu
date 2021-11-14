<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asrama extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function santri() 
    {
        return $this->hasMany(Santri::class);
    }

    public function transaksi() 
    {
        return $this->hasMany(Transaksi::class);
    }
}
