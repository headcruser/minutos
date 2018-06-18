<?php

namespace Minuta\Http\Requests\Usuario;

use Minuta\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'name'      =>'required',
            'email'     =>'required|email',
            'password'  =>''
        ];
    }

    public function update( User $user)
    {
        DB::transaction(function () use ($user)
        {
            $data = $this->validated();

            if(!empty($data['password'])) {
              $user->password =  bcrypt($data['password']);
            }

            $user->name = $data['name'];
            $user->email = $data['email'];

            $user->save();
        });
    }
}
