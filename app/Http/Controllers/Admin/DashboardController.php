<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Event;
use App\Models\CaseStudy;

class DashboardController extends Controller
{
    public function index()
    {
        // Blog stats
        $blogPublished = Blog::where('status', 'published')->count();
        $blogDrafts = Blog::where('status', 'draft')->count();
        $blogTotal = Blog::count();
        $blogViews = Blog::sum('views');
        
        // Event stats
        $eventsPublished = Event::where('status', 'published')->count();
        $eventsDrafts = Event::where('status', 'draft')->count();
        $eventsTotal = Event::count();
        $eventsViews = Event::sum('views');
        
        // Case Study stats
        $casestudiesPublished = CaseStudy::where('status', 'published')->count();
        $casestudiesDrafts = CaseStudy::where('status', 'draft')->count();
        $casestudiesTotal = CaseStudy::count();
        $casestudiesViews = CaseStudy::sum('views');
        
        // Total views
        $totalViews = $blogViews + $eventsViews + $casestudiesViews;
        
        // Recent posts
        $recentBlogs = Blog::latest()->take(5)->get();
        $recentEvents = Event::latest()->take(5)->get();
        $recentCaseStudies = CaseStudy::latest()->take(5)->get();
        
        return view('admin.dashboard', compact(
            'blogPublished', 'blogDrafts', 'blogTotal', 'blogViews',
            'eventsPublished', 'eventsDrafts', 'eventsTotal', 'eventsViews',
            'casestudiesPublished', 'casestudiesDrafts', 'casestudiesTotal', 'casestudiesViews',
            'totalViews',
            'recentBlogs', 'recentEvents', 'recentCaseStudies'
        ));
    }
    
    public function analytics()
    {
        return view('admin.analytics');
    }
}