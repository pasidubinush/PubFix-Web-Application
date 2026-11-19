<?php

namespace App\Http\Requests\Worker;

use Illuminate\Foundation\Http\FormRequest;

class WorkerPeriodRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user()?->isHandyman() === true;
    }

    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'period' => ['nullable', 'date_format:Y-m'],
        ];
    }
}