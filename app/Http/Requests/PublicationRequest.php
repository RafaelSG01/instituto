<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PublicationRequest extends FormRequest
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
            'title' => 'required',
            'document' => 'required|file|mimes:pdf'
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'Título',
            'document' => 'Arquivo'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Você deve especificar um título!',
            'document.required' => 'Você deve enviar um arquivo!',
            'document.mimes' => 'O sistema só aceita arquivos no formato PDF!'
        ];
    }
}
