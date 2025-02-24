<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;
use App\Models\Pemeliharaan;

class Lokasi extends Model
{
    use HasFactory;
    protected $table = 'lokasis';
    protected $primaryKey = "id";

    protected $fillable = [
        'id',
        'nama_lokasi',
    ];

    public function barang()
    {
        return $this->hasMany(Barang::class);
    }

    public function pemeliharaan()
    {
        return $this->hasMany(Pemeliharaan::class);
    }
}
