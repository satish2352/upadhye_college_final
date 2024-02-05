<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResourceHomeModel extends Model
{
    use HasFactory;
    protected $table = 'our_resource';
    protected $primaryKey = 'id';
}
