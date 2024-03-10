<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Registrations; // Make sure to import your Registration model

class UniqueEventEmailPhone implements Rule
{
    private $eventId;

    public function __construct($eventId)
    {
        $this->eventId = $eventId;
    }

    public function passes($attribute, $value)
    {
        $existingRecord = Registrations::where('event_id', $this->eventId)
            ->where(function ($query) use ($value) {
                $query->where('email', $value)
                    ->Where('phone', $value);
            })
            ->first();

        return !$existingRecord;
    }

    public function message()
    {
        return 'The email or phone number already exists for the current event.';
    }
}
