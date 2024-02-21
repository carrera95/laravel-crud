<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
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
            'name' => 'required | string | min:5',
            'description' => 'required',
            'categoria' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'El nombre es requeridasdfo', 
            'name.min' => 'Agrega mas caracteres prro',
            'description.required' => 'LA descripcion es requerida prro'
        ];
    }
    public function attributes():array
    {
        return [
            'name' => 'Nombre del formulario crear'
        ];
    }
}
