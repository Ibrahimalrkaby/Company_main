<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatesittingRequest extends FormRequest
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
            'phone'    => 'required|number',
            'address'  => 'required|string',
            'facebook' => 'required|url',
            'twitter'  => 'required|url',
            'linkedin' => 'required|url',
            'youtube'  => 'required|url',
            'instagram' => 'required|url',
        ];
    }

    public function attributes()
    {
        return [
            'phone'    => __("keywords.phone"),
            'address'  => __("keywords.address"),
            'facebook' => __("keywords.facebook"),
            'twitter'  => __("keywords.twitter"),
            'linkedin' => __("keywords.linkedin"),
            'youtube'  => __("keywords.youtube"),
        ];
    }
}
