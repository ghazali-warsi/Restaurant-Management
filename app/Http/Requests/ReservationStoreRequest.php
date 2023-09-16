<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\DateBetween;
use App\Rules\TimeBetween;

class ReservationStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'firstname' => ['required'],
            'lastname' => ['required'],
            'email' => ['required'],
            'reservation_date' => ['required','date_format:Y-m-d\TH:i',new DateBetween,new TimeBetween],
            'tel_number' => ['required'],
            'table_id' => ['required'],
            'guest_number' => ['required'],
        ];
    }
}
