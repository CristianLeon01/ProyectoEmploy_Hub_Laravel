<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RelationRequest extends FormRequest
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
            'name_related_occupation' => ['required', 'string', 'max:500'],
            'id_occupations' => ['required', 'exists:occupations,id'],
            'occupation_name' => ['required', 'exists:occupations,id'],
        ];
    }
}
