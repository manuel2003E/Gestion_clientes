<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'direccion', 'contacto'];

    public function creditos()
    {
        return $this->hasMany(Credito::class);
    }

    public function reportes()
    {
        return $this->hasMany(Reporte::class);
    }
}

