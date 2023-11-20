<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'titre' => 'required|string|max:100',
            'resume' => 'required|string',
            'pochette' => 'required|string|max:200',
            'durée' => 'required|string|max:25',
            'realisateur' => 'required|exists:personnes,id',
            'producteur' => 'required|exists:personnes,id',
            'année' => 'required|integer',
            'lienVideo' => 'required|string|max:100',
            'type' => 'required|string|max:50',
            'brand' => 'required|string|max:100',
            'cote' => 'required|integer',
            'rating' => 'required|integer',
            'langues' => 'required|string|max:400',
            'sousTitres' => 'required|string|max:400',
        ];
    }
}
