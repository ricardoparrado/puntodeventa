<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
    ];

    public function ventas()
    {
        return $this->hasMany(Venta::class, 'producto_id');
    }

    public function compras()
    {
        return $this->hasMany(Compra::class, 'producto_id');
    }

    public function categorias()
    {
        return $this->belongsToMany(CategoriaProducto::class, 'producto_categoria', 'producto_id', 'categoria_id');
    }
}
