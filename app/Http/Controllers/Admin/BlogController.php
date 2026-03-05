<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('admin.blog.index', compact('blogs'));
    }
    
    public function create()
    {
        return view('admin.blog.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->all();
        
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blogs', 'public');
            $data['image'] = $imagePath;
        }
        
        $data['views'] = 0;
        $data['meta_keywords'] = $request->meta_keywords ? json_encode(explode(',', $request->meta_keywords)) : null;
        
        Blog::create($data);
        
        return redirect()->route('admin.blog.index')->with('success', 'Blog created successfully');
    }
    
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blog.edit', compact('blog'));
    }
    
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->all();
        
        if ($request->hasFile('image')) {
            // Delete old image
            if ($blog->image) {
                Storage::disk('public')->delete($blog->image);
            }
            $imagePath = $request->file('image')->store('blogs', 'public');
            $data['image'] = $imagePath;
        }
        
        $data['meta_keywords'] = $request->meta_keywords ? json_encode(explode(',', $request->meta_keywords)) : null;
        
        $blog->update($data);
        
        return redirect()->route('admin.blog.index')->with('success', 'Blog updated successfully');
    }
    
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        
        // Delete image
        if ($blog->image) {
            Storage::disk('public')->delete($blog->image);
        }
        
        $blog->delete();
        
        return redirect()->route('admin.blog.index')->with('success', 'Blog deleted successfully');
    }
}