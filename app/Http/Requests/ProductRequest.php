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
            'name' => 'required|unique:products',
            'price' => 'required',
            'photo_file' => 'required|max:2048|file|image'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Заполните поле',
            'unique' => 'Товар с данным наименованием уже существует',
            'max' => 'Максимальный размер изображения 2048',
            'file' => 'Содержимое должно быть изображением',
            'image' => 'Содержимое должно быть изображением'
        ];
    }
}
