<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'tel_number',
        'table_id',
        'reservation_date',
        'guest_number',
        'duration_hours',
    ];

    protected $dates = [
        'reservation_date',
        'cancellation_deadline', 
     
    ]; 

    public function table(){
        return $this->belongsTo(Table::class);
     }

     protected $hidden = ['user_id'];

     public function user()
     {
         return $this->belongsTo(User::class);
     }
 
}
