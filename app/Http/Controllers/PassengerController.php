<?php

namespace App\Http\Controllers;

use App\Models\Passenger;
use Illuminate\Http\Request;

class PassengerController extends Controller
{
    // Creco un metodo index (quello che richiamo dalla rotta)
    public function index()
    {
        $passengers = Passenger::all(); // adesso ho bisogno di popolare $passengers attraverso il model ed il metodo all()
        // Dico al metodo di "tornare" la vista pages.home e con il compact passo anche $trains che contiene tutti i dati
        // recuperati dalla tabella nel db
        return view("pages.passengers", compact("passengers"));
    }
}