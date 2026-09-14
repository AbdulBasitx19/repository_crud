<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * (Kya user yeh action kar sakta hai?)
     */
    public function authorize(): bool
    {
        return true; 
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'author' => 'required|string|max:100',
        ];
    }

   
    public function messages(): array
    {
        return [
            'title.required' => 'Post title is required.',
            'title.max' => 'Title maximum allowed :255 characters .',
            'author.required' => 'Author name is must.',
        ];
    }
}