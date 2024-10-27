<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainsController extends Controller
{
    // Creco un metodo index (quello che richiamo dalla rotta)
    public function index()
    {
        $trains = Train::all(); // adesso ho bisogno di popolare $trains attraverso il model ed il metodo all()
        // Dico al metodo di "tornare" la vista pages.home e con il compact passo anche $trains che contiene tutti i dati
        // recuperati dalla tabella nel db
        return view("pages.home", compact("trains"));
    }
}