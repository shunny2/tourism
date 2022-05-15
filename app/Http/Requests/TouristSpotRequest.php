<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TouristSpotRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'bail|required|string|min:5|max:255|unique:tourist_spots',
            'description' => 'bail|max:255|nullable',
            'important_informations' => 'bail|required|max:255',
            'timetable' => 'bail|required',
            'paid' => 'boolean',
            'value' => 'nullable|numeric',
            'image' => 'nullable'
        ];
    }
}
