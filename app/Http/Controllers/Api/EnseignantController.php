<?php

namespace App\Http\Controllers\Api;

use App\Models\Enseignant;
use Illuminate\Http\Request;
use App\Events\EnseignantCreated;
use App\Http\Controllers\Controller;

class EnseignantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Enseignant::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $enseignant= $request->only(['nom','prenoms','email','telephone','adresse']);

        // $enseignant=Enseignant::create($enseignant);

        broadcast(new EnseignantCreated($enseignant));
        return response(['created' => true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Enseignant  $enseignant
     * @return \Illuminate\Http\Response
     */
    public function show(Enseignant $enseignant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Enseignant  $enseignant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enseignant $enseignant)
    {
        //
        $params= $request->only(['nom','prenoms','email','telephone','adresse']);

        // Ajouter un event if enseignant update pour signaler la mise a jour ici

        return $enseignant->update($params);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enseignant  $enseignant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enseignant $enseignant)
    {
        //
    }
}
