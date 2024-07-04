<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
{

    public function authorize()
    {
        return auth()->user()->role == 'admin';
    }


    public function rules()
    {
        return [
            'category_id' => 'required|integer|exists:categories,id',
            'name_uz' => 'required|string|max:255',
            'name_ru' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'price' => 'required|string|max:255',
            'description_uz' => 'nullable|string',
            'description_ru' => 'nullable|string',
            'description_en' => 'nullable|string',
            'image' => 'nullable|file|mimes:jpeg,png,jpg,gif,mp4,mov,avi,wmv|max:20480'
        ];
    }
}
