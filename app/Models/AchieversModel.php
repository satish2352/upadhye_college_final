<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AchieversModel extends Model
{
    use HasFactory;
    protected $table = 'achievers';
    protected $primaryKey = 'id';
    protected $fillable = ['name'];

    public static function getall()
    {
        // Your logic to fetch all solutions goes here
        return self::all(); // Example: using Eloquent's all() method to get all records
    }
}
