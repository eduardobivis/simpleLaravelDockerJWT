<?php

namespace App\Http\Controllers;
use App\Pokemon;

use Illuminate\Http\Request;

class PokemonsController extends Controller
{
    /*
    * Return all Registered Pokemons
    */
    public function index()
    {
        return view('pokemon.index', ['pokemons' => Pokemon::all()]);
    }
}
