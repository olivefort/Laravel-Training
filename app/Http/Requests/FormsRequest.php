<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormsRequest extends FormRequest
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
            'titre' => 'required|min:5|max:60',
            'article' => 'required|min:10|max:255',
        ];        
    }
    public function messages(){
        return [
            'titre.required' => 'Veuillez remplir ce champ',
            'titre.min' => 'La saisie est trop courte (minimum 5 caractères)',
            'titre.max' => 'La saisie est trop longue (maximum 10 caractères)',
            'article.required' => 'Veuillez remplir ce champ',
            'article.min' => 'La saisie est trop courte (minimum 10 caractères)',
            'article.max' => 'La saisie est trop longue (maximum 255 caractères)',
        ];
    }
}
