<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'price' => ['required', 'integer'],
            'images' => ['required', 'array'],
            'images.*' => ['required', 'file', 'mimes:jpg,jpeg,png'],
            'categories' => ['required', 'array'],
            'categories.*' => ['required', 'integer', 'exists:categories,id'],
            'description' => ['required', 'string'],
        ];
    }
}
