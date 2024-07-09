<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RumahSakitModel extends Model
{
    use HasFactory;

    protected $table = 'table_rumahsakit';
    protected $fillable = ['nama_rs', 'address_rs', 'telepon'];
}
