<?php

namespace App\Http\Requests\Worker;

use App\Models\Booking;
use Illuminate\Foundation\Http\FormRequest;

class WorkerBookingActionRequest extends FormRequest
{
    public function authorize(): bool
    {
        $booking = $this->route('booking');

        return $booking instanceof Booking
            && $this->user()?->can($this->route('action', 'viewAsWorker'), $booking) === true;
    }

    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [];
    }
}