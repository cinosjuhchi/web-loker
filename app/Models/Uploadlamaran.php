<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uploadlamaran extends Model
{
    use HasFactory;
    protected $fillable = ['job_title', 'company_name', 'user_id'];
}
