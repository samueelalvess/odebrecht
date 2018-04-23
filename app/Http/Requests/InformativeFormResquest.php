<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InformativeFormResquest extends FormRequest
{

    public function authorize()
    {
        return false;
    }

    public function rules()
    {
        return [
            'titulo' => 'required|max:100',
            'descricao' => 'required',
            'dataexpiracao' => 'required|date',
        ];
    }
}
