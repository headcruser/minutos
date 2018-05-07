<?php

namespace Minuta\Http\Requests\Tema;

use Minuta\Models\Tema;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Http\FormRequest;

class CreateTheme extends FormRequest
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
            'tema'       => 'required',
            'tiempo'     => 'required',
            'debate'     => 'required',
            'conclusion' => 'required'
        ];
    }

    /**
     * messages
     *
     * @return void
     */
    public function messages(){
        return [
            'tema.required'         => 'El Campo Tema es obligatorio',
            'tiempo.required'       => 'El Campo tiempo es obligatorio',
            'debate.required'       => 'El Campo debate es obligatorio',
            'conclusion.required'   => 'El campo conclusion es obligatorio'
        ];
    }

     /**
     * Save Theme Method
     *
     * @return void
     */
    public function save() {

        DB::transaction(function () {
            $data = $this->validated();

             if($this->ajax()){

                $tema = new Tema();
                $tema->tema         = $data['tema'];
                $tema->tiempo       = $data['tiempo'];
                $tema->debate       = $data['debate'];
                $tema->conclusion   = $data['conclusion'];
                $tema->save();

                $reunion = $this->only('reunion');
                $id_reunion = $reunion['reunion'];

                $tema->reuniones()->attach($id_reunion);
            }
        });

    }
}
