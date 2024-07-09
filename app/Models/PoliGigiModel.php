<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoliGigiModel extends Model
{
    use HasFactory;

    protected $table = 'poli_gigi';
    protected $fillable = ['nama', 'keterangan'];
}
