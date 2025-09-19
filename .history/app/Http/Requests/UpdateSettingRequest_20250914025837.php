<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingRequest extends FormRequest
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
            'address' => 'required|string',
            'phone' => 'required|number',
            'email' => 'required|string',
            'facebook' => 'required|url',
            'instagram' => 'required|url',
            'youtube' => 'required|url',
            'linkedin' => 'required|url',
        ];
    }

    public function attributes()
    {
        return [
            // 'title' => __("keywords.title"),
        ];
    }
}
