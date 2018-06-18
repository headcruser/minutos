<?php

namespace Minuta\Http\Requests\Usuario;

use Minuta\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required'
        ];
    }

     /**
     * messages
     *
     * @return void
     */
    public function messages(){
        return [
            'name.required' => 'El Campo nombre es obligatorio',
            'email.required' => 'El Campo email es obligatorio',
            'password.required' => 'El Campo password es obligatorio'
        ];
    }

     /**
     * Save Theme Method
     *
     * @return void
     */
    public function crear()
    {
        DB::transaction(function ()
        {
            $data = $this->validated();

            User::create([
                'name'      => $data['name'],
                'email'     => $data['email'],
                'password'  => bcrypt($data['password'])
            ]);
        });

    }
}
