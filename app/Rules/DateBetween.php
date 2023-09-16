<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Carbon\Carbon;

class DateBetween implements Rule
{
   public function passes($attribute, $value)
{
    $pickupDate = Carbon::parse($value);
    $twoDaysFromNow = Carbon::now()->addDays(2);

    return $pickupDate >= $twoDaysFromNow;
}

public function message()
{
    return 'Please choose a date at least two days from now.';
}
}
