<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    use HasFactory;
    protected $fillable = [
        'e_name',
        'b_name',
        'email',
        'phone',
        'affiliation',
        'type',
    ];
}
