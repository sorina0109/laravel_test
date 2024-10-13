<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;


class ContactFormRequest extends FormRequest
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
            'name' => 'required|max:100',
            'email' => 'email|required|max:120',
            'phone' => 'required|max:30',
            'subject' => 'required|max:250',
            'message' => 'required|max:600',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Trebuie sa introduceti un nume pentru a trimite un mesaj',
            'name.max' => 'Numele nu poate depasi 100 de caractere inclusiv spatiile goale',
            'email.email' => 'Trebuie sa introduceti o adresa de email valida!',
            'email.required' => 'Trebuie sa introduceti o adresa de email pentru a putea trimite un mesaj',
            'email.max' => 'Adresa de email nu poae avea mai mult de 120 de caractere',
            'phone.required' => 'Trebuie sa introduceti un numar de telefon!',
            'phone.max' => 'Numarul de telefon nu poate avea mai mult de 30 de caractere',
            'subject.required' => 'Trebuie sa trimiteti un subiect!',
            'subject.max' => 'Mesajul nu poate avea mai mult de 600 de caractere inclusiv spatiile goale',
            'message.required' => 'Trebuie sa trimiteti un mesaj!',
            'message.max' => 'Mesajul nu poate avea mai mult de 600 de caractere inclusiv spatiile goale',
        ];
    }
}
