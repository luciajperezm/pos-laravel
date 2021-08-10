<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
           'name' => 'required|string|unique:categories,name,' . $this->route('category')->id . '|max:50',
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
