<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DenominationRequest extends FormRequest
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
            'denominate_description' => ['required', 'string', 'max:450'],
            'id_occupations' => ['required', 'exists:occupations,id'],
            'occupation_name' => ['required', 'exists:occupations,occupation_name'],
        ];
    }       
}
