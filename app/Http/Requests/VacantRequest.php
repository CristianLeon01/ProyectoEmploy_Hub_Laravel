<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VacantRequest extends FormRequest
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
            'number_vacancies_applied' => ['required', 'integer', 'min:1'],
            'id_offers' => ['required', 'exists:offers,id'],
            'city_id' => ['required', 'exists:cities,id'],
            'id_contract_types' => ['required', 'exists:contract_types,id'],
            'id_weighings' => ['required', 'exists:weighings,id'],
        ];
    }
}
