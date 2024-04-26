<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePlayerRequest extends FormRequest
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
            'player_name' => 'required|string',
            'position' => 'required|string',
            'matches_played' => 'required|integer',
            'goals' => 'required|integer',
            'assists' => 'required|integer',
            'debut' => 'required|date',
            'final_match' => 'nullable|date',
            'country' => 'required|string',
            'imageURL' => 'required|string',
        ];
    }
}