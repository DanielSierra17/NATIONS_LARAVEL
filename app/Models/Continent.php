<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    // Tabla a conectar
    protected $table = "continents";

    // Clave primaria
    protected $primaryKey = "continent_id";

    // Omitir campos de auditoria
    public $timestamps = false;

    use HasFactory;
}
