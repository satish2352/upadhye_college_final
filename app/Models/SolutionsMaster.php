<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolutionsMaster extends Model
{
    use HasFactory;
    protected $table = 'our_solutions_master';
    protected $primaryKey = 'id';
  
    public static function getall()
    {
        // Your logic to fetch all solutions goes here
        return self::all(); // Example: using Eloquent's all() method to get all records
    }
}
