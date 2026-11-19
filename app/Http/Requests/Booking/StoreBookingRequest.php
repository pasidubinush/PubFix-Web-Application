<?php

namespace App\Http\Requests\Booking;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'handyman_id' => ['required', 'integer', 'exists:handymen,id'],
            'description' => ['required', 'string', 'max:1000'],
            'booking_at' => ['required', 'date', 'after:now'],
        ];
    }

    /**
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'booking_at.after' => 'Please choose a future date and time for your booking.',
        ];
    }
}
