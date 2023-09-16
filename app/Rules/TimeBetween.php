<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Carbon\Carbon;

class TimeBetween implements Rule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function passes($attribute,$value)
    {
        //
        $pickupDate = Carbon::parse($value);
        $pickupDate = Carbon::createFromTime($pickupDate->hour, $pickupDate->minute, $pickupDate->second);
        $earliestTime = Carbon::createFromTimeString('05:00:00');
        $lastTime = Carbon::createFromTimeString('12:05:00');
        return $pickupDate->between($earliestTime, $lastTime ) ? true : false;
    }
    public function message()
    {
        return 'Please choose the time between 5pm to 12pm.';
    }
}
