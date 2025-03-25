<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ClienteFormRequest extends FormRequest
{
    /**
     * Determina se o usuário está autorizado a fazer o cadastro.
     */
    public function authorize(): bool
    {
        return true;
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json([
                'success' => false,
                'message' => 'Erro de validação',
                'errors' => $validator->errors(),
            ], 422));
    }

    
    public function rules(): array
    {
        return [
           'nome' => 'required',
           'endereco' => 'required|max:80',
           'telefone' => 'required',
           'CPF' => 'required|cpf|unique:clientes,CPF',
           'email' => 'required',
           'password' => 'required'
        ];
    }

    public function messages(){

        return [
            'nome.required' => 'O campo deve ser preenchido',
            'endereco.required' => 'O campo deve ser preenchido',  
            'telefone.required' => 'O campo deve ser preenchido',  
            'CPF.required' => 'O campo deve ser preenchido',
            'email.required' => 'O campo deve ser preenchido', 
            'password.required' => 'O campo deve ser preenchido', 
            'endereco.max' => 'O máximo de caracteres é 80',
            'CPF.unique' => 'Esse CPF já está cadastrado'
        ];
    }
    
}
