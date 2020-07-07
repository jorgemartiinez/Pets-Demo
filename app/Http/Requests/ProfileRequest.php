<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'name' => ['required', 'min:2'],
            'email' => ['required', 'string', 'email', 'max:255', \Illuminate\Validation\Rule::unique('users')->ignore($this->user()->id)],
            'phone' => ['required', 'string', 'digits:9', \Illuminate\Validation\Rule::unique('profiles')->ignore($this->user()->id)],
            'city' => ['required', 'string', 'min:2'],
            'province' => ['required', 'string', 'min:2'],
        ];
    }
}
