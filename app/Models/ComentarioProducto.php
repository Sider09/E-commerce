<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComentarioProducto extends Model
{
    use HasFactory;

    protected $primaryKey = 'ComentarioID'; // Especificamos la llave primaria
    public $timestaps = false;

    protected $fillable = ['comentario']; 

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'ProductoID');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'UsuarioID');
    }

    public function valoraciones()
    {
        return $this->hasMany(ValoracionesProductos::class, 'ComentarioID');
    }
}
