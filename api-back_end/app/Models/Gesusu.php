<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gesusu extends Model
{
    use HasFactory;

    protected $table = 'gesusus';
    protected $primaryKey = 'ID_USUARIO';
    protected $fillable = ['NOME_PROFIS', 'SENHA', 'STATUS', 'EMAIL'];
}
