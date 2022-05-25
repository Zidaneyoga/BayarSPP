<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'tb_customer';
    protected $primaryKey = 'customer_id';
    protected $fillable = ['customer_name','nisn', 'contact_name', 'kelas_jurusan',  'tanggal', 'jumlah_bayar',  'status' ];
}

