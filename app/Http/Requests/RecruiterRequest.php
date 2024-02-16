<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecruiterRequest extends FormRequest
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
            'number_document' => ['required', 'string', 'max:15'],
            'document_type' => ['required', 'in:TI,CC,NIT,PASSPORT,CC_FOREIGNER'],
            'name' => ['required', 'string', 'max:25'],
            'phone' => ['required', 'string', 'max:15'],
            'email' => ['required', 'email', 'max:30'],
            'id_user_types' => ['required', 'exists:user_types,id'],
        ];
    }
}
