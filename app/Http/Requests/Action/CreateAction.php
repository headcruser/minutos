<?php

namespace Minuta\Http\Requests\Action;

use Minuta\Models\Acciones;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Http\FormRequest;

class CreateAction extends FormRequest
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
            'elementos'       => 'required',
            'responsable'     => 'required',
            'plazo'           => 'required',
        ];
    }
     /**
     * messages
     *
     * @return void
     */
    public function messages(){
        return [
            'elementos.required'   => 'El Campo elementos es obligatorio',
            'responsable.required' => 'El Campo responsable es obligatorio',
            'plazo.required'       => 'El Campo plazo es obligatorio',
        ];
    }

     /**
     * Save Action Method
     *
     * @return void
     */
    public function save() {

			DB::transaction(function () {
				$data = $this->validated();

				if($this->ajax()) {
					$acciones = new Acciones();
					$acciones->elementos         = $data['elementos'];
					$acciones->responsable       = $data['responsable'];
					$acciones->plazo             = $data['plazo'];
					$acciones->save();

					$tema = $this->only('tema');

					DB::table('acciontema')->insert([
							'idAccion'  => $acciones->id,
							'idTema'    => $tema['tema']
					]);

				}
			});
    }
}
