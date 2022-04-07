<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGallery extends FormRequest
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
                'name' => 'required|max:10',
                'description' => 'required|min:10',
                'category' => 'required'
        ];
    }

    public function attributes()
    {
        // Personalización del mensaje de error
        return [
            'name' => 'nombre de la foto'
        ];
    }

    public function messages()
    {
        // Personalización por cada validación del campo
        return [
            'description.required' => 'Debe ingresar una descripción de la foto',
            'description.min' => 'La longitud de la descripción no es correcta, deben ser 10 carácteres',
        ];   
    }
}
