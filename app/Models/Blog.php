<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    protected $fillable = [
        'title', 
        'subtitle', 
        'content', 
        'meta_description', 
        'meta_keywords', 
        'image', 
        'slug', 
        'status', 
        'views'
    ];

    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($blog) {
            $slug = Str::slug($blog->title);
            $count = static::where('slug', 'LIKE', $slug . '%')->count();
            $blog->slug = $count ? $slug . '-' . ($count + 1) : $slug;
        });
    }

    public function getImageUrlAttribute()
    {
        return $this->image ? asset('storage/' . $this->image) : null;
    }
}