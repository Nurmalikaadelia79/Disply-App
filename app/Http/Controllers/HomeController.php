<?php
namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil 4 blog terbaru untuk ditampilkan di home
        $blogs = Blog::where('status', 'published')
                     ->latest()
                     ->take(4)
                     ->get();
        
        return view('home', compact('blogs'));
    }
}