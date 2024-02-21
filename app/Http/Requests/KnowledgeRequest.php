<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KnowledgeRequest extends FormRequest
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
            'knowledge_name' => ['required', 'string', 'max:100'],
            'knowledge_description' => ['required', 'string', 'max:300'],
            'id_occupations' => ['required', 'exists:occupations,id'],
            'occupation_name' => ['required', 'exists:occupations,id'],
        ];
    }
}
