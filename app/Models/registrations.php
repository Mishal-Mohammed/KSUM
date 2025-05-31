<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class registrations extends Model
{
    use HasFactory;

    // Mass assignable fields
    protected $fillable = [
        'startUp',
        'founderName',
        'email',
        'website',
        'sector',
        'description',
        'file_path',
    ];
}
