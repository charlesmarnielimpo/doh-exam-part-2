<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $fillable = ['full_name', 'email_address', 'birth_date', 'position_applied', 'edge'];
}
