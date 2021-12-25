<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;

class ListaController extends Controller
{
    //
    public function index()
    {
        $productos = Producto::paginate();
        return view('welcome', compact('productos'));
    }
}
