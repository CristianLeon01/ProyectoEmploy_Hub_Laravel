<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
            'company_name' => ['required', 'string', 'max:25'],
            'legal_representative' => ['required', 'string', 'max:50'],
            'company_type' => ['required', 'in:NOT_DEFINED,LIMITED,ANONYMOUS,COMMAND,ASSOCIATIVE COMPANY,SOLE PROPRIETORSHIP,OTHER,NATURAL PERSON,COLLECTIVE SOCIETY,SIMPLIFIED JOINT STOCK COMPANIES,LIMITED PARTNERSHIP,LIMITED PARTNERSHIP BY SHARES,RURAL COMPANY SENA EMPRENDE RURAL'],
            'NIT' => ['required', 'string', 'max:50'],
            'number_workers' => ['required', 'string', 'max:50'],
            'legal_representative_email' => ['required', 'email', 'max:80'],
            'nature' => ['required', 'in:PUBLIC,PRIVATE,MIXED'],
            'email' => ['required', 'email', 'max:80'],
            'phone' => ['required', 'string', 'max:30'],
            'alternate_phone' => ['nullable', 'string', 'max:30'],
            'human_resources_manager' => ['required', 'string', 'max:50'],
            'phone_2' => ['nullable', 'string', 'max:30'],
            'alternate_phone_2' => ['nullable', 'string', 'max:30'],
            'email_manager' => ['required', 'email', 'max:80'],
            'id_user_types' => ['required', 'exists:user_types,id'],
            'id_post' => ['required', 'exists:posts,id'],
        ];
    }
}
