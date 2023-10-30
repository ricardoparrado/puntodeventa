<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';

    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'email',
    ];

    public function ventas()
    {
        return $this->hasMany(Venta::class, 'cliente_id');
    }

    public function compras()
    {
        return $this->hasMany(Compra::class, 'cliente_id');
    }
}
