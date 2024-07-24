<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogRequest extends FormRequest
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
            'title' => ['required', 'max:100'],
            'category_id' => ['required'],
            'img' => ['required', 'image', 'mimes:png,jpg,jpeg,'],
            'blog' => ['required', 'max:2000'],
        ];
    }

    public function attributes(){
        return [
            'category_id' => 'category',
            'img' => 'image',
        ];
    }
}
