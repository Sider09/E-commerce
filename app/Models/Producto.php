<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $primaryKey = 'ProductoID';
    public $timestaps = false;
    protected $fillable = ['Nombre', 'Descripcion', 'Precio', 'Stock'];

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class);
    }

    public function comentarios()
    {
        return $this->hasMany(ComentariosProductos::class, 'ProductoID');
    }

    public function detallesPromocion()
    {
        return $this->hasMany(DetallesPromocion::class, 'ProductoID');
    }

    public function carritos()
    {
        return $this->belongsToMany(CarritoCompras::class);
    }

    public function pedidos()
    {
        return $this->belongsToMany(Pedidos::class);
    }

    public function valoraciones()
    {
        return $this->hasMany(ValoracionesProductos::class, 'ProductoID');
    }
}
