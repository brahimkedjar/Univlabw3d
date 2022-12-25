<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;
class StoreUserRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_name' =>['required', 'string'],
            'email' =>['string', 'unique:users'],
            'password' =>['required', Password::defaults()],
            'inscription_number' =>['required', 'string', 'unique:users'],
            'last_name' =>['required', 'string'],
            'speciality_id' =>['string', 'required'],
            'group_id' =>['required'],
            'departement_id'=>['required'],
            'username'=>['required', 'string', 'unique:users'],
        ];
    }
}