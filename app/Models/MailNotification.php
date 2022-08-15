<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MailNotification extends Model
{
    protected $fillable = [
        'subject', 'receiver_name', 'property_name','property_location','property_createdOn','status'
    ];
}
