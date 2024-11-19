<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gesusu extends Authenticatable
{
    use HasFactory, HasApiTokens;

    protected $table = 'gesusus';
    protected $primaryKey = 'ID_USUARIO';
    protected $fillable = ['NOME_PROFIS', 'SENHA', 'STATUS', 'EMAIL'];

    protected $hidden = ['SENHA'];

    public function getAuthPassword()
    {
        return $this->SENHA;
    }
}
