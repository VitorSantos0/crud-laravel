<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    //autorização do usuário
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    //regras dos campos
    public function rules()
    {
        return [
            'title'=> 'required',
            'local'=> 'required',
            'value'=> 'required | numeric'
        ];        
    }

    public function messages()
    {
        return [
            'title.required' => 'Informe o título do evento.',   
            'local.required' => 'Informe o local do evento.',
            'value.required' => 'Informe o valor do evento.',
            'value.numeric' => 'Informe o valor corretamente.'          
        ];
    }
}
