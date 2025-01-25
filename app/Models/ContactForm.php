<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    protected $table = 'contactform';
    protected $fillable = [
        'name',
        'email',
        'message',
        'purpose',
        'investment',
        'city',
        'firm_name',
        'crm_name',
        'crm_rating',
        'resume',
    ];

}
