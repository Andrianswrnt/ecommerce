<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;
    
    protected $fillable = ['id','Nama_Kategori'];
    public $timestamps = true ;

    public function Barang()
    {
        return $this->hasMany(barang::class);
    }


}
