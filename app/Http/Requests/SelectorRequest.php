<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SelectorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'number_document_selector' => ['required', 'string', 'max:15'],
            'document_type_selector' => ['required', 'in:TI,CC,NIT,PASSPORT,CC_FOREIGNER'],
            'name_selector' => ['required', 'string', 'max:25'],
            'email_selector' => ['required', 'email', 'max:30'],
            'phone_selector' => ['required', 'string', 'max:15'],
            'id_user_types' => ['required', 'exists:user_types,id'],
        ];
    }
}
