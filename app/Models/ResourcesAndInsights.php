<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResourcesAndInsights extends Model
{
    use HasFactory;
    protected $table = 'resources_and_insights';
    protected $primaryKey = 'id';
}
