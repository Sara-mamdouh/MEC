<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCourseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'topics' => ['required','string'],
           
        ];
    }
    public function messages()
    {
        return [
            'name' => ['required'=>"please enter course name", 'string'=>"must be string", 'max'=>"must be less than 255 numbers"],
            'topics' => ['required'=>"please enter course topics", 'string'=>"must be string"],
           
        ];
    }
}
