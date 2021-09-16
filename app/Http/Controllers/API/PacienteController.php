<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Http\Requests\GuadarPacienteRequest;
use App\Http\Requests\ActualizarPacienteRequest;
use App\Http\Resources\PacienteResource;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PacienteResource::collection(Paciente::simplePaginate(5));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuadarPacienteRequest $request)
    {
        
        // return response()->json([
        //     'res' => true,
        //     'msg' => 'Paciente Guardado Correctamente'
        // ],200);

        return (new PacienteResource(paciente::create($request->all())))
                ->additional(['msg' => 'Paciente Guardado Correctamente']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        // return response()->json([
        //     'res' => true,
        //     'paciente' => $paciente,
        // ],200);

        return new PacienteResource($paciente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActualizarPacienteRequest $request, Paciente $paciente)
    {
        // return response()->json([
            //     'res' => true,
            //     'mensaje' => 'Paciente Actualizado correctamente'
            // ],200);
            
        $paciente->update($request->all());
        return (new PacienteResource($paciente))
        ->additional(['msg' => 'Paciente Actualiozado Correctamente'])
        ->response()
        ->setStatusCode(202);
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
       
        // return response()->json([
        //     'res' => true,
        //     'mensaje' => 'Paciente Eliminado correctamente'
        // ],200);
        $paciente->delete();
        return (new PacienteResource($paciente))
        ->additional(['msg' => 'Paciente Actualiozado Correctamente']);
    }
}
