<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoliAnakModel extends Model
{
    use HasFactory;

    protected $table = 'poli_anak';
    protected $fillable = ['nama', 'keterangan'];

}
