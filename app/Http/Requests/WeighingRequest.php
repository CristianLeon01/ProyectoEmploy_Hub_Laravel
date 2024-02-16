<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WeighingRequest extends FormRequest
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
            'languages' => ['required', 'in:ENGLISH,FRENCH,GERMAN,SPANISH'],
            'education' => ['required', 'in:BACHELORS DEGREE,POSTGRADUATE,UNDERGRADUATE,TECHNICIAN,TECHNOLOGIST,ENGINEER'],
            'work_experience' => ['required', 'string', 'max:30'],
            'technical_skills' => ['required', 'string'],
            'previous_project' => ['required', 'string', 'max:60'],
            'references' => ['required', 'string', 'max:40'],
            'additional_course' => ['required', 'string', 'max:50'],
        ];
    }
}
