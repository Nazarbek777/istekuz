<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LogoUpdateRequest extends FormRequest
{
    
    public function authorize()
    {
        return auth()->user()->role == 'admin';
    }

    
    public function rules()
    {
        return [
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:4096',
        ];
    }
}
