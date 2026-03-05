<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class CaseStudyController extends Controller
{
    public function index()
    {
        return view('admin.casestudies.index');
    }
    
    public function create()
    {
        return view('admin.casestudies.create');
    }
}