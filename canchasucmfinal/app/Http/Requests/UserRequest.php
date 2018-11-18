<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'min:4| max:100| required',
            'apellido'=> 'min:4| max:100| required',
            'email'=> 'min:10 |max:120| required| unique:users',
            'rut'=> 'min:9 | max: 12| required| unique:users'
        ];
    }
}
