<?php

namespace Minuta\Http\Requests\Minuta;

use Minuta\Models\Reunion;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Http\FormRequest;

class CreateMinuta extends FormRequest
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
            'fecha'     => 'required',
            'hora'      => 'required',
            'lugar'     => 'required',
            'convocado' =>'required',
            'tipoReunion'=>'required',
            'organizador'=>'required',
            'asistentes' =>'required',
        ];
    }

    public function messages(){
        return [
            'fecha.required' => "El campo fecha es obligatorio"
        ];
    }

    /**
     * Save Minuta Method
     *
     * @return void
     */
    public function save() {

        DB::transaction(function () {
            $data = $this->validated();

            Reunion::create([
                'convocado' => $data['convocado'],
                'tipoReunion' => $data['tipoReunion'],
                'fecha' => $data['fecha'],
                'hora' =>  new \DateTime($data['hora']),
                'lugar' => $data['lugar'],
                'organizador' => $data['organizador'],
                'asistentes' => $data['asistentes'],
                'status' => true,
            ]);
        });

    }
}
