<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $primaryKey = 'CategoriaID';
    public $timestaps = false;
    protected $fillable = ['Nombre'];

    public function productos()
    {
        return $this->belongsToMany(Producto::class);
    }
}
