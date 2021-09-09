<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class PacienteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nombres' => Str::upper($this->nombres),  
            'apellidos' => Str::upper($this->apellidos),
            'edad' => $this->edad,
            'sexo' => $this->sexo,
            'dni' => $this->dni,
            'tipo_sangre' => $this->tipo_sangre,
            'telefono' => $this->telefono,
            'correo' => $this->correo,
            'direccion' => $this->direccion,
            'Fecha_creado' => $this->created_at->format('d-m-Y'),
            'Fecha_modificado' => $this->updated_at->format('d-m-Y')
        ];
    }

    public function with($request)
    {
        return [
            'res' => true
        ];
    }
}
