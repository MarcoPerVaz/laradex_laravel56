<?php

namespace laradex\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTrainerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     * return false Laravel devuelve un error 403 acción no autorizada
     * return true Verifica si las validación son correctas
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     * 'name' => 'required|max:10'
     *    *El elemento 'name' es obligatorio y máximo tendrá 10 caracteres
     * 'description' => 'required'
     *    *El elemento 'description' es obligatorio
     * 'avatar' => 'required|image'
     *    *El elemento 'avatar' es obligatorio y de tipo imagen
     */
    public function rules()
    {
        return [
            'name' => 'required|max:10',
            'description' => 'required',
            'avatar' => 'required|image',
        ];
    }
}
