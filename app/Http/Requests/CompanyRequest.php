<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
            'name' => 'required|string|min:2|max:255',
            'email' => 'nullable|string|email|max:255',
            'logo' => 'nullable|image|dimensions:min_width=100,min_height=100',
            'website' => 'nullable|string|url',
        ];
    }
}
