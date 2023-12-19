<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfferRequest extends FormRequest
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
            'name_vacant' => ['required', 'string', 'max:50'],
            'description_vacant' => ['required', 'string', 'max:250'],
            'name_company' => ['required', 'string', 'max:100'],
            'address' => ['required', 'string', 'max:50'],
            'salary' => ['required', 'numeric', 'min:0'],
            'start_date' => ['required', 'date'],
            'end_date' => ['required', 'date', 'after_or_equal:start_date'],
            'months_experience' => ['required', 'integer', 'min:0'],
            'requirements' => ['required', 'string', 'max:500'],
            'id_contract_types' => ['required', 'exists:contract_types,id'],
        ];
    }
}
