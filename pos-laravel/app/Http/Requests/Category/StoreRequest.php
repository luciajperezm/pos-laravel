<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|unique:categories|max:50',
            'description' => 'nullable|string|max:250',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'This field is required',
            'name.string' => 'This input only accepts letters',
            'name.unique' => 'This category is already registered in the system',
            'name.max' => 'This input does not accept more than 50 characters',

            'description.string' => 'This input only accepts letters',
            'description.max' => 'This input does not accept more than 250 characters',
        ];
    }
}


