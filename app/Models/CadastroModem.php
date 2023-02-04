<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CadastroModem extends Model
{
    use HasFactory;
    protected $fillable = ['numero_serie', 'patrimonio', 'modelo', 'status'];
}
