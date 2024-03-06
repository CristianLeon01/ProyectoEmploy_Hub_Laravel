<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserTypeRequest extends FormRequest
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
            'user_type_name' => 'required|string|in:ADMIN,SELECTOR,RECRUITER,CANDIDATE,COMPANY',
        ];
    }
}
