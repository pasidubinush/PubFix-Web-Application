<?php

namespace App\Http\Requests\Worker;

use Illuminate\Foundation\Http\FormRequest;

class UpdateWorkerServiceAreaRequest extends FormRequest
{
    public function authorize(): bool
    {
        $user = $this->user();
        $handyman = $user?->handyman;

        return $user?->can('update', $handyman) ?? false;
    }

    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'zip_code' => ['required', 'string', 'max:10'],
            'city' => ['required', 'string', 'max:255'],
            'available' => ['sometimes', 'boolean'],
        ];
    }
}