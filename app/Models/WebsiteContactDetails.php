<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteContactDetails extends Model
{
    use HasFactory;
    protected $table = 'website_contact_details';
    protected $primaryKey = 'id';

}
