<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComiteeDetails extends Model
{
    use HasFactory;
    protected $table = 'tbl_comitee';
    protected $primaryKey = 'id';

}
