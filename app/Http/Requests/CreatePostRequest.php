<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Contracts\Service\Attribute\Required;

class CreatePostRequest extends FormRequest
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
            'name_restaurant'=>'required|min:5|max:10',
            'zipCode_restaurant'=>'required',
            'adress_restaurant'=>'required',
            'town_restaurant'=>'required',
            'country_restaurant'=>'required',
            'description_restaurant'=>'required',
            'review_restaurant'=>'required',
        ];
    }

    public function message()
    {
        return [
            'name.required' => 'The name is required',
            'name.min' => 'Maximum 5 letters please!',
            'name.max' => 'Maximum 10 letters please!',
          ];
    }
}
