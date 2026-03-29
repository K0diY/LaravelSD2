<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConferenceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'speakers' => 'nullable|string|max:255',
            'date' => 'required|date',
            'time' => 'nullable',
            'location' => 'required|string|max:255',
            'address' => 'nullable|string|max:255',
        ];
    }
}