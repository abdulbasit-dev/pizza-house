<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index()
    {
        $pizzas = Pizza::all();
        // $pizzas = Pizza::orderBy("name")->get();
        // $pizzas = Pizza::where("name", "basit")->get();
        // $pizzas = Pizza::latest()->get();

        return view('pizzas.index', ["pizzas" => $pizzas]);
    }

    public function show(Request $request)
    {
        return view('pizzas.show', ["id" => $request->id]);
    }

    public function create()
    {
        return view('pizzas.create');
    }
}
