<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurSolutionsMasters extends Model
{
    use HasFactory;
    protected $table = 'our_solutions_master';
    protected $primaryKey = 'id';
// protected $fillable = [
//         'title',
//         'description',
//         'solution_id',
//         'short_description',
//         'long_description',
//     ];
}
