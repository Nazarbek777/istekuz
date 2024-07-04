<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsStoreRequest extends FormRequest
{

    public function authorize()
    {
        return auth()->user()->role == 'admin';
    }


    public function rules()
    {
        return [
            'name_uz' => 'required|string',
            'name_ru' => 'required|string',
            'name_en' => 'required|string',
            'description_uz' => 'required|string',
            'description_ru' => 'required|string',
            'description_en' => 'required|string',
            'image' => 'nullable',
            'image2' => 'nullable',
        ];
    }
}
