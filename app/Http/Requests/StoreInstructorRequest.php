<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInstructorRequest extends FormRequest
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
            'job' => ['required','string'],
            'experience' => ['required','string'],
            'photo' => [ 'extensions:jpg,png,jpeg'],
            'category'=>['required'],
        ];
    }
    public function messages()
    {
        return [
            'name' => ['required'=>"please enter instructor name", 'string'=>"must be string", 'max'=>"must be less than 255 numbers"],
            'job' => ['required'=>"please enter instructor job",'string'=>"must be string"],
            'experience' => ['required'=>"please enter instructor experience",'string'=>"must be string"],
            'photo'=>['extensions:jpg,png,jpeg'=>"extensions must be jpg or png or jpeg"],
            'category'=>['required'=>"please select diploma for instructor"],
        ];
    }
}
