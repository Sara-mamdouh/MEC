<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
            'price' => ['required','numeric'],
            'duration' => ['required','string'],
            'photo' => [ 'extensions:jpg,png,jpeg'],
            'select_process'=>['required'],
            "description"=>['required','string','min:10','max:255']
        ];
    }
    public function messages()
    {
        return [
            'name' => ['required'=>"please enter category name", 'string'=>"must be string", 'max'=>"must be less than 255 numbers"],
            'price' => ['required'=>"please enter category price",'numeric'=>"must be number", 'max'=>"must be less than 5 chr"],
            'duration' => ['required'=>"please enter category duration", 'numeric'=>"must be string"],
            'photo'=>['extensions:jpg,png,jpeg'=>"extensions must be jpg or png or jpeg"],
            'select_process'=>['required'=>"please select courses of category"],
            'description'=>['required'=>"please enter category description",'string'=>"must be string",'min'=>"must be more than 10 chr",'max'=>"must be less than 255 chr"],
        ];
    }
}
