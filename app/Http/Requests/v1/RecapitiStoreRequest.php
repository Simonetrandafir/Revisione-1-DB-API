<?php

namespace App\Http\Requests\v1;

use Illuminate\Foundation\Http\FormRequest;

class RecapitiStoreRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "idContatto"=> "required|integer",
            "idTipoRecapito"=> "required|integer",
            "recapito"=> "required|string|max:255",
        ];
    }
}
