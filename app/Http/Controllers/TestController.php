<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class TestController extends Controller
{
    public function welcome()
    {
    	// $categories = Category::get();
    	$categories = Category::has('products')->get(); //has se encarga de verificar la existencia de realciones, como si fuera un join enetre productos y categorias
    	// La lectura sería: vamos a obtener la categoria de los productos
    	return view('welcome')->with(compact('categories'));
    }
}
