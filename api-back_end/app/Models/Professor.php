<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Professor extends Model
{
    use HasFactory, HasApiTokens;
    
    protected $table = 'professors';
    protected $primaryKey = 'CODPROF';
    protected $fillable = ['NOME', 'EMAIL', 'STATUS'];

}