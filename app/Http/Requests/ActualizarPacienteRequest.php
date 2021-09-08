<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActualizarPacienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombres' =>  'required|string',
            'apellidos' =>  'required|string',
            'edad' =>  'required',
            'sexo' =>  'required',
            'dni' =>  'required|unique:pacientes,dni,'.$this->route('paciente')->id,
            'tipo_sangre' =>  'required',
            'telefono' =>  'required',
            'correo' =>  'required',
            'direccion' =>  'required'
        ];
    }
}
