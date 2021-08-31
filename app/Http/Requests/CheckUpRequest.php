<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckUpRequest extends FormRequest
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
            'name'=>'required|alpha|between:2,50',
            'surname'=>'required|alpha|between:2,50',
            'phonenumber'=>'required|numeric|digits_between:7,15',
            'email'=>'required|email:rfc,dns',
            'cap'=>'required|numeric|digits:5',
            'patient'=>'required|boolean',
            'text'=>'required|between:10,100',
            'privacy'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Inserire il nome.',
            'name.alpha'=>'Il nome può contenere solo lettere.',
            'name.between'=>'Il nome inserito è troppo corto o troppo lungo.',
            'surname.required'=>'Inserire il cognome.',
            'surname.alpha'=>'Il cognome può contenere solo lettere.',
            'surname.between'=>'Il cognome inserito è troppo corto o troppo lungo',
            'phonenumber.required'=>'Inserire il numero di telefono.',
            'phonenumber.numeric'=>'Il numero di telefono può contenere solo numeri.',
            'phonenumber.digits_between'=>'Il numero di telefono inserito è troppo corto o troppo lungo.',
            'email.required'=>'Inserire l\'indirizzo email.',
            'email.email'=>'Inserire un indirizzo email valido.',
            'cap.required'=>'Inserire il CAP.',
            'cap.numeric'=>'Il CAP può contenere solo numeri.',
            'cap.digits'=>'Il CAP deve contenere 5 cifre.',
            'patient.required'=>'Indicare se si è già pazienti DentalPlus.',
            'patient.boolean'=>'Indicare se si è già pazienti DentalPlus: selezionare sì o no dal menù a tendina.',
            'text.required'=>'Inserire una richiesta.',
            'text.between'=>'La richiesta inserita è troppo breve o troppo lunga.',
            'privacy.required'=>'Ricorda di accettare la Privacy Policy per permetterci di richiamarti.'
        ];
    }
}
