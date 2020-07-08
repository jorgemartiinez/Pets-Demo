<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdRequest extends FormRequest
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
            'title' => ['required', 'min:10', 'max:60', 'string'],
            'description' => ['required', 'min:10', 'max:300', 'string'],
            'animal' => ['required', 'string'],
            'name' => ['required', 'string'],
            'birthday' => ['required', 'date'],
            'gender' => ['required', 'string'],
            'weight' => ['required'],
            'sterilized' => ['required', 'boolean'],
            'image' => ['required', 'image', 'dimensions:min_width=600,min_height=400']
        ];
    }
}
