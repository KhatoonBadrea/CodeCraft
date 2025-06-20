<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        
        return [
            'title' => 'required|string|min:3|max:20',
            'description' => 'required|string|min:10,max:200',
            'price' => 'required|integer',
            'quantity' => 'required|integer',
            // 'available' => 'required|boolean'
            'category_id'=>['required','integer','exists:categories,id'],

        ];
    }
}
