<?php
namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('status', 'published')
                     ->latest()
                     ->paginate(6);
        
        return view('blog', compact('blogs'));
    }
    
    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)
                    ->where('status', 'published')
                    ->firstOrFail();
        
        // Increment views
        $blog->increment('views');
        
        // Get related posts (based on tags or same category)
        $related = Blog::where('status', 'published')
                       ->where('id', '!=', $blog->id)
                       ->latest()
                       ->take(3)
                       ->get();
        
        return view('blog-detail', compact('blog', 'related'));
    }
}
