<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    use HasFactory;

       protected $fillable=[
           "name",
           "address",
           "email",
           "alternative_email",
           "number",
           "alternative_number",
           "google_map",
           "facebook_link",
           "instagram_link",
            "youtube_link",
           "skype_link",
           "navbar_logo",
           "navbar_link",
           "footer_logo",
           "footer_link",
            "description"
        ];



}
