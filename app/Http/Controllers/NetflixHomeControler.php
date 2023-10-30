<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personne;

class NetflixHomeControler extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     */
    public function index()
    {
        return View('Netflix.home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('Netflix.create');
    }
    public function films()
    {
        return View('Netflix.films');
    }
    public function personnes()
    {
        $personnes = Personne::all();
        return View('Netflix.personnes', compact(('personnes')));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
