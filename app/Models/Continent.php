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

    // Relacion entre continente y regiones
    public function regiones() {
        // Linked model
        return $this->hasMany(Region::class,
                                'continent_id');
    } 
}
