<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
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
        $pizza = Pizza::findOrFail($request->id);

        return view('pizzas.show', ["pizza" => $pizza]);
    }


    public function create()
    {
        return view('pizzas.create');
    }

    public function store()
    {
        $pizza = new Pizza();
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request("toppings");
        $pizza->save();
        return redirect('/')->with("message", "Thank you for your order");
    }

    public function destroy($id)
    {
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();
        return redirect('/pizzas');
    }
}
