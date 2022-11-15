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
    //'group' =>'required',
    public function rules()
    {
        return [
            'first_name' => ['required','string'],
            'email' =>['string', 'unique:users'],
            'password' =>['required', 'confirmed', Password::defaults()],
            'last_name' =>['required', 'string'],
            'inscription_number' =>['required', 'unique:users'],
            'username'=>['required', 'string', 'unique:users'],
        ];
    }
}
