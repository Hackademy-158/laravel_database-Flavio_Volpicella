<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSongRequest extends FormRequest
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
            'title' => 'required|min:3|max:100',
            'artist' => 'required|min:3|max:20',
            'album' => 'required|min:3|max:20',
            'description' => 'required|min:10|max:500',
            // 'cover' => 'required|mimes:jpg,jpeg,png,gif',
        ];
    }

    public function messages(): array
{
    return [
        'title.required' => 'Il campo del titolo è obbligatorio',
        'title.min' => 'Il titolo deve avere almeno 3 caratteri',
        'artist.required' => 'Il campo dell\'artista è obbligatorio',
        'artist.min' => "Il campo dell'artista deve contenere almeno 3 caratteri.",
        'album.required' => 'Il campo dell\'album è obbligatorio',
        'album.min' => "Il campo dell' album deve contenere almeno 3 caratteri",
        'description.required' => 'Il campo della descrizione è obbligatorio',
        'description.min' => "Il campo della descrizione deve contenere almeno 10 caratteri",


    ];
}
}

