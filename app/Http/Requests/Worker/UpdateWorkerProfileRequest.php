<?php

namespace App\Http\Requests\Worker;

use Illuminate\Foundation\Http\FormRequest;

class UpdateWorkerProfileRequest extends FormRequest
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
            'name' => ['sometimes', 'required', 'string', 'max:255'],
            'phone' => ['sometimes', 'nullable', 'string', 'max:30'],
            'category_id' => ['sometimes', 'integer', 'exists:categories,id'],
            'hourly_rate' => ['sometimes', 'numeric', 'min:0'],
            'bio' => ['sometimes', 'nullable', 'string', 'max:5000'],
            'city' => ['sometimes', 'string', 'max:255'],
            'available' => ['sometimes', 'boolean'],
            'avatar' => ['sometimes', 'nullable', 'image', 'mimes:jpeg,png,jpg,webp', 'max:5120'],
        ];
    }
}
