<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|min:5|max:255',
            'author' => 'required|string|min:5|max:255',
            'description' => 'required|string|min:5',
            'pages' => 'required|integer',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'O título é de preenchimento obrigatório',
            'title.string' => 'O título é de preenchimento obrigatório e no formato de texto',
            'author.required' => 'O nome do autor é de preenchimento obrigatório',
            'description.required' => 'A descrição deve ser preenchida',
            'pages.required' => 'Você deve informar o número de páginas do livro',
        ];
    }
}
