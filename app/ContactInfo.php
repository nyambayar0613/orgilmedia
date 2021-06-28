<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    protected $table = 'contact_info';

    protected $fillable = [
        'address',
        'phone_number',
        'email',
        'lat',
        'long',
        'zipcode',
        'facebook_link',
        'youtube_link',
        'instagram_link'
    ];
}
