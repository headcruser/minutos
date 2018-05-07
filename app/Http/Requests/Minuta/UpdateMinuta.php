<?php

namespace Minuta\Http\Requests\Minuta;

use Minuta\Models\Reunion;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Http\FormRequest;

class UpdateMinuta extends FormRequest
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
            'lugar'     => 'required',
            'convocado' =>'required',
            'tipoReunion'=>'required',
            'organizador'=>'required',
            'asistentes' =>'required',
            'status' =>'',
            'hora' =>'',
        ];
    }

    public function messages(){
        return [
            'fecha.required' => "El campo fecha es obligatorio"
        ];
    }

    /**
     * update
     *
     * @param Reunion $reunion
     * @return void
     */
    public function update(Reunion $reunion) {

        DB::transaction(function () use($reunion) {

            $data = $this->validated();
            $data['hora'] = new \DateTime($data['hora']);
            $reunion->update($data);
        });

    }
}
