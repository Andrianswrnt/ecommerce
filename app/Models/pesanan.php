<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $fillable = ['user_id'];

    public function barang()
    {
        return $this->belongsToMany(barang::class)->withPivot('jumlah');
    }
}
