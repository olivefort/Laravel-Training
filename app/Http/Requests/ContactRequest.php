<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'nom' => 'required|min:5|max:10|alpha',
            'email' => 'required|email',
            'texte' => 'required|min:10|max:255',
        ];
    }

    public function messages(){
        return [
            'nom.required' => 'Veuillez remplir ce champ',
            'nom.min' => 'La saisie est trop courte (minimum 5 caractères)',
            'nom.max' => 'La saisie est trop longue (maximum 10 caractères)',
            'nom.alpha' => 'Merci de ne saisir que des lettres',
            'email.email' => 'Veuillez saisir un email valide',
            'email.required' => 'Veuillez remplir ce champ',
            'texte.required' => 'Veuillez remplir ce champ',
            'texte.min' => 'La saisie est trop courte (minimum 10 caractères)',
            'texte.max' => 'La saisie est trop longue (maximum 255 caractères)',
        ];
    }
    public function filters(){
        return [
            'nom' => 'trim|capitalize',
        ];
    }
}
