<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;
    protected $fillable = ['id','Nama_Barang','Id_Kategori','Stok','Harga','Gambar'];
    public $timestamps = true ;

    public function kategori()
    {
        return $this->belongsTo(kategori::class,'Id_Kategori', 'id');
    }
    public function detail()
    {
        return $this->hasOne(Detail::class);
    }

    public function Cart()
    {
        return $this->hasMany(cart::class,'Id_Barang' , 'Harga');
    }
}
 
 

