<?php

namespace App\Models;

use App\Models\Post;
use App\Models\Resume;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Company extends Authenticatable
{
    use HasFactory;
    protected $guarded = ['id'];

    /**
     * Get all of the comments for the Company
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class, 'id_company', 'id');
    }



    /**
     * Get all of the comments for the Company
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function resumes(): HasMany
    {
        return $this->hasMany(Resume::class, 'company_id', 'id');
    }

    /**
     * Get the user that owns the Company
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function getRoleAttribute()
    {
        return 'company';
    }
}
