<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrator;

class AdministratorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $administrators = Administrator::get();
        return view(
            'administrator.listaAdministrador',
            [
                'administrators' => $administrators
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('administrator.formAdministrator');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Administrator::create([
            'user' => request('user'),
            'password' => request('password')
        ]);
        // return redirect()->route('listaAdministrador');
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
    public function edit(Administrator $administrator)
    {
        return view(
            "administrator.editAdministrator",
            [
                'administrator' => $administrator
            ]
        );
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
    public function destroy(Administrator $administrator)
    {
        $administrator->delete();

        return redirect()
            ->route('administrators.index')
            ->with('success', 'Administrador eliminado correctamente');
    }
}
