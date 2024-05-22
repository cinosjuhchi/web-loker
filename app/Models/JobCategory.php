<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpKernel\Profiler\Profile;

class JobCategory extends Model
{
    use HasFactory;

    public function posts()
    {
        return $this->hasMany(User::class);
    }
}
