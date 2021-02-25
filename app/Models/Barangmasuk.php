<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Barangmasuk extends Model
{
    use SoftDeletes;

    public $search;
    protected $queryString = ['search'];


    protected $table = 'barangmasuk';

    protected $fillable = [
        'nama_barang',
        'restock',
        'harga',
        'total',
        'tgl_masuk',
        'status'
    ];

    protected $hidden = [
        // 
    ];
}
