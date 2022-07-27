<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    // Tabla a conectar
    protected $table = "countries";

    // Clave primaria
    protected $primaryKey = "country_id";

    // Omitir campos de auditoria
    public $timestamps = false;

    use HasFactory;
}
