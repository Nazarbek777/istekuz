<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamUpdateRequest extends FormRequest
{
    
    public function authorize()
    {
        return auth()->user()->role == 'admin';
    }

    
    public function rules()
    {
        return [
            'full_name' => 'required|string',
            'job' => 'required|string',
            'skill' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:4096',
            'experience' => 'required|string',
            'facebook_link' => 'nullable|string',
            'instagram_link' => 'nullable|string',
            'telegram_link' => 'nullable|string',
            'youTube_link' => 'nullable|string',
            'description_uz' => 'nullable|string',
            'description_ru' => 'nullable|string',
            'description_en' => 'nullable|string',
        ];
    }
}
