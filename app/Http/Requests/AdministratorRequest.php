<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdministratorRequest extends FormRequest
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
            'document_number' => 'required|string|unique:administrators,document_number',
            'document_type' => 'required|string|in:TI,CC,NIT,PASSPORT,CC_FOREIGNER',
            'name' => 'required|string|max:25',
            'last_name' => 'required|string|max:25',
            'email' => 'required|email|unique:administrators,email|max:30',
            'password' => 'required|string|max:35',
            'id_user_types' => 'required|exists:user_types,id'
        ];
    }
}
