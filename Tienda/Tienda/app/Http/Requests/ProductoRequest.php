<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
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

    public function rules()
    {
        return [
            'nombre' => 'required|string|max:255',
            'marca' => 'required|string|max:255',
            'precio' => 'required|numeric|between:0,999999.99',
            'compatibilidad' => 'required|string|max:255',
            'categoria' => 'required|string|max:255',
            'subcategoria' => 'required|string|max:255',
            'rutaimg' => 'required|image|max:2048',
            'descripcion' => 'required|string',
        ];
    }

    public function attributes()
    {
        return [
            'nombre' => 'nombre del producto',
            'marca' => 'marca del producto',
            'precio' => 'precio del producto',
            'compatibilidad' => 'compatibilidad del producto',
            'categoria' => 'categoría del producto',
            'subcategoria' => 'subcategoría del producto',
            'rutaimg' => 'imagen del producto',
            'descripcion' => 'descripción del producto',
        ];
    }
    
    
    public function messages()
    {
    
             return [
        'nombre.required' => 'El  :attribute es requerido',
        'nombre.string' => 'El  :attribute debe ser una cadena de texto',
        'nombre.max' => 'El  :attribute es muy largo',

        'marca.required' => 'La  :attribute es requerida',
        'marca.string' => 'La  :attribute debe ser una cadena de texto',
        'marca.max' => 'La  :attribute es muy larga',

        'precio.required' => 'El  :attribute es requerido',
        'precio.numeric' => 'El  :attribute debe ser un número',
        'precio.between' => 'El  :attribute debe estar entre :min y :max',

        'compatibilidad.required' => 'La  :attribute es requerida',
        'compatibilidad.string' => 'La  :attribute debe ser una cadena de texto',
        'compatibilidad.max' => 'La  :attribute es muy largo',

        'categoria.required' => 'La  :attribute es requerido',
        'categoria.string' => 'La :attribute debe ser una cadena de texto',
        'categoria.max' => 'La  :attribute es muy largo',

        'subcategoria.required' => 'La  :attribute es requerida',
        'subcategoria.string' => 'La  :attribute debe ser una cadena de texto',
        'subcategoria.max' => 'La  :attribute es muy largo',

        'rutaimg.required' => 'La  :attribute es requerida',
        'rutaimg.image' => 'La  :attribute debe ser una imagen',
        'rutaimg.max' => 'La  :attribute no puede ser mayor de :max kilobytes',

        'descripcion.required' => 'La  :attribute es requerida',
        'descripcion.string' => 'La  :attribute debe ser una cadena de texto',
    
        ];
    }

}
