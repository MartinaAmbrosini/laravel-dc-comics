<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicFromRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string|min:3|max:255|',
            'author_firstname' => 'required|string|min:3|max:255|',
            'author_lastname' => 'required|string|min:3|max:255|',
            'genre' => 'required|string|min:6|max:255|',
            'date_of_publish' => 'required',
        ];
    }
}
