<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name_uz' => 'string|required',
            'name_ru' => 'string|required',
            'name_en' => 'string|required',
        ];
    }
}
