<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCricketerRequest extends FormRequest
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
            'name' => 'required|string',
            'country' => 'required|string',
            'age' => 'required|integer',
            'role' => 'required|string',
            'matches_played' => 'required|integer',
            'runs_scored' => 'required|integer',
            'wickets_taken' => 'required|integer',
        ];
    }
}
