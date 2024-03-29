<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LifeSheetRequest extends FormRequest
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
            'personal_description' => ['required', 'string', 'max:200'],
            'languages' => ['required', 'string', 'max:200'],
            'experience' => ['required', 'string', 'max:500'],
            'education' => ['required', 'string', 'max:500'],
        ];
    }
}
