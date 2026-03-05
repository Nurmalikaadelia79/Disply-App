@extends('layouts.app')

@section('title', 'Blog Management')

@section('content')
    <!-- Back to Dashboard Button -->
    <div style="margin-bottom: 20px;">
        <a href="{{ route('admin.dashboard') }}" style="display: inline-flex; align-items: center; gap: 8px; color: var(--gray-600); text-decoration: none; font-size: 14px; padding: 8px 16px; background: white; border-radius: 8px; box-shadow: var(--shadow-sm);">
            <i class="fas fa-arrow-left"></i>
            <span>Back to Dashboard</span>
        </a>
    </div>

    @if(session('success'))
        <div style="background: #d4edda; color: #155724; padding: 12px; border-radius: var(--radius); margin-bottom: 20px;">
            {{ session('success') }}
        </div>
    @endif

    <!-- Header dengan New Post Button -->
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
        <h1 style="font-size: 28px; font-weight: 700; color: var(--gray-800); letter-spacing: -0.5px;">Blog Posts</h1>
        <a href="{{ route('admin.blog.create') }}" style="background: var(--primary); color: white; padding: 12px 24px; border-radius: 8px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; font-weight: 500;">
            <i class="fas fa-plus"></i> New Post
        </a>
    </div>

    <!-- Stats Cards -->
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-bottom: 30px;">
        <div style="background: white; border-radius: var(--radius-lg); padding: 20px; box-shadow: var(--shadow); display: flex; align-items: center; gap: 15px;">
            <div style="width: 50px; height: 50px; border-radius: 12px; background: rgba(67, 97, 238, 0.1); color: var(--primary); display: flex; align-items: center; justify-content: center; font-size: 24px;">
                <i class="fas fa-blog"></i>
            </div>
            <div>
                <p style="color: var(--gray-500); font-size: 14px; margin-bottom: 4px;">Total Posts</p>
                <h3 style="font-size: 28px; font-weight: 700; color: var(--gray-800);">{{ $blogs->count() }}</h3>
            </div>
        </div>
        
        <div style="background: white; border-radius: var(--radius-lg); padding: 20px; box-shadow: var(--shadow); display: flex; align-items: center; gap: 15px;">
            <div style="width: 50px; height: 50px; border-radius: 12px; background: rgba(16, 185, 129, 0.1); color: var(--success); display: flex; align-items: center; justify-content: center; font-size: 24px;">
                <i class="fas fa-check-circle"></i>
            </div>
            <div>
                <p style="color: var(--gray-500); font-size: 14px; margin-bottom: 4px;">Published</p>
                <h3 style="font-size: 28px; font-weight: 700; color: var(--gray-800);">{{ $blogs->where('status', 'published')->count() }}</h3>
            </div>
        </div>
        
        <div style="background: white; border-radius: var(--radius-lg); padding: 20px; box-shadow: var(--shadow); display: flex; align-items: center; gap: 15px;">
            <div style="width: 50px; height: 50px; border-radius: 12px; background: rgba(239, 71, 111, 0.1); color: var(--danger); display: flex; align-items: center; justify-content: center; font-size: 24px;">
                <i class="fas fa-pencil-alt"></i>
            </div>
            <div>
                <p style="color: var(--gray-500); font-size: 14px; margin-bottom: 4px;">Drafts</p>
                <h3 style="font-size: 28px; font-weight: 700; color: var(--gray-800);">{{ $blogs->where('status', 'draft')->count() }}</h3>
            </div>
        </div>
    </div>
    
    <!-- Table Card -->
    <div style="background: white; border-radius: var(--radius-lg); padding: 24px; box-shadow: var(--shadow);">
        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="border-bottom: 2px solid var(--gray-200);">
                    <th style="padding: 15px 12px; text-align: left; color: var(--gray-600); font-weight: 600;">No</th>
                    <th style="padding: 15px 12px; text-align: left; color: var(--gray-600); font-weight: 600;">Image</th>
                    <th style="padding: 15px 12px; text-align: left; color: var(--gray-600); font-weight: 600;">Title</th>
                    <th style="padding: 15px 12px; text-align: left; color: var(--gray-600); font-weight: 600;">Status</th>
                    <th style="padding: 15px 12px; text-align: left; color: var(--gray-600); font-weight: 600;">Views</th>
                    <th style="padding: 15px 12px; text-align: left; color: var(--gray-600); font-weight: 600;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($blogs as $index => $blog)
                <tr style="border-bottom: 1px solid var(--gray-200);">
                    <td style="padding: 15px 12px;">{{ $index + 1 }}</td>
                    <td style="padding: 15px 12px;">
                        @if($blog->image)
                            <img src="{{ asset('storage/'.$blog->image) }}" alt="" style="width: 50px; height: 50px; object-fit: cover; border-radius: 8px;">
                        @else
                            <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 8px;"></div>
                        @endif
                    </td>
                    <td style="padding: 15px 12px;">
                        <div style="font-weight: 600; color: var(--gray-800);">{{ $blog->title }}</div>
                        @if($blog->subtitle)
                            <div style="font-size: 13px; color: var(--gray-500); margin-top: 4px;">{{ $blog->subtitle }}</div>
                        @endif
                    </td>
                    <td style="padding: 15px 12px;">
                        <span style="background: {{ $blog->status == 'published' ? 'rgba(16,185,129,0.1)' : 'rgba(239,71,111,0.1)' }}; color: {{ $blog->status == 'published' ? 'var(--success)' : 'var(--danger)' }}; padding: 6px 12px; border-radius: 30px; font-size: 13px; font-weight: 500;">
                            {{ ucfirst($blog->status) }}
                        </span>
                    </td>
                    <td style="padding: 15px 12px;">
                        <span style="display: inline-flex; align-items: center; gap: 5px; background: var(--gray-100); padding: 4px 10px; border-radius: 30px;">
                            <i class="fas fa-eye" style="font-size: 12px; color: var(--gray-500);"></i>
                            <span style="font-weight: 600;">{{ $blog->views ?? 0 }}</span>
                        </span>
                    </td>
                    <td style="padding: 15px 12px;">
                        <div style="display: flex; gap: 8px;">
                            <a href="{{ route('admin.blog.edit', $blog->id) }}" style="background: var(--gray-100); color: var(--gray-700); padding: 8px 12px; border-radius: 8px; text-decoration: none; display: inline-flex; align-items: center; gap: 5px; font-size: 13px;">
                                <i class="fas fa-edit" style="color: var(--primary);"></i>
                                <span>Edit</span>
                            </a>
                            <form action="{{ route('admin.blog.destroy', $blog->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="background: var(--gray-100); color: var(--gray-700); padding: 8px 12px; border-radius: 8px; border: none; display: inline-flex; align-items: center; gap: 5px; font-size: 13px; cursor: pointer;" onclick="return confirm('Yakin mau dihapus?')">
                                    <i class="fas fa-trash" style="color: var(--danger);"></i>
                                    <span>Delete</span>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" style="padding: 60px 20px; text-align: center;">
                        <i class="fas fa-blog" style="font-size: 48px; color: var(--gray-300); margin-bottom: 16px;"></i>
                        <h3 style="font-size: 18px; font-weight: 600; color: var(--gray-700); margin-bottom: 8px;">Belum ada blog post</h3>
                        <p style="color: var(--gray-500); margin-bottom: 20px;">Mulai dengan membuat blog post pertama Anda</p>
                        <a href="{{ route('admin.blog.create') }}" style="background: var(--primary); color: white; padding: 10px 20px; border-radius: 8px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
                            <i class="fas fa-plus"></i> Buat Blog Post
                        </a>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <style>
        /* Hover effects */
        tr:hover td {
            background-color: var(--gray-50);
        }
        
        .action-btn:hover {
            transform: translateY(-1px);
            box-shadow: var(--shadow-sm);
        }
    </style>
@endsection