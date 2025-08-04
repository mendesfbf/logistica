<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projetore;

class ProjetorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projetores=Projetore::all();
        return view('layouts.projetor.list_projetor', compact('projetores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
