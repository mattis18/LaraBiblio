<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function ouvrages()
    {
        return view('ouvrages');
    }
    public function inscrits()
    {
        return view('inscrits');
    }
    public function pret()
    {
        return view('pret');
    }
    public function evenements()
    {
        return view('evenements');
    }
    public function commande()
    {
        return view('commande');
    }
}
