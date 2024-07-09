<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoliRsModel extends Model
{
    use HasFactory;

    protected $table = 'table_poli';
    protected $fillable = ['nama', 'desc'];
}
