<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrationModel extends Model
{
    use HasFactory;
    protected $table = 'registration';
     protected $fillable = [
        'course_id',
        'admission_mode',
        'fullname',
        'email',
        'address',
        'mobile_number',
        'agree_to_receive_sms_call',
    ];
    protected $primaryKey = 'id';
}
