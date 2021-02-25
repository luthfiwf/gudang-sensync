<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Barang extends Model
{
    use SoftDeletes;

    public $search;
    protected $queryString = ['search'];


    protected $table = 'barang';

    protected $fillable = [
        'nama_barang', 'harga', 'stock', 'rak'
    ];

    protected $hidden = [
        // 
    ];
}
