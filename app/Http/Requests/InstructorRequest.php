<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InstructorRequest extends FormRequest
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
            'document_type' => ['required', 'in:TI,CC,NIT,PASSPORT,CC_FOREIGNER'],
            'document_number' => ['required','max:20'],
            'instructor_name' => ['required', 'string', 'max:30'],
            'instructor_lastname' => ['required', 'string'],
            'email' => ['required', 'string', 'max:50'],
            'password' => ['required', 'string', 'max:40'],
            'id_administrators' => ['required', 'exists:administrators,id']
        ];
    }
}
