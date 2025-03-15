<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServicioRequest extends FormRequest
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
			'servicio' => 'required|string',
			'nombre' => 'required|string',
			'descripción' => 'required|string',
			'disponibilidad' => 'required|string',
			'costo' => 'required|string',
			'horario' => 'required|string',
        ];
    }
}
