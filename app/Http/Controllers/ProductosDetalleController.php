<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductosDetalleController extends Controller
{
    public function index()
    {
        // Obtener todos los productos con sus categorías y comentarios
        $productos = Producto::with('categorias', 'comentarios')->get();

        // Retornar la vista home con los productos
        return view('home', compact('productos'));
    }
}
