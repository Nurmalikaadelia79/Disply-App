@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <!-- Container dengan Flex untuk Sidebar + Content -->
    <div style="display: flex; gap: 30px; min-height: calc(100vh - 200px);">
        
        <!-- SIDEBAR -->
        <div style="width: 260px; background: white; border-radius: var(--radius-lg); padding: 24px; box-shadow: var(--shadow); height: fit-content;">
            <!-- Admin Info -->
            <div style="text-align: center; margin-bottom: 24px; padding-bottom: 24px; border-bottom: 1px solid var(--gray-200);">
                <div style="width: 80px; height: 80px; border-radius: 50%; background: linear-gradient(145deg, var(--primary) 0%, #7209b7 100%); margin: 0 auto 12px; display: flex; align-items: center; justify-content: center; color: white; font-size: 32px; font-weight: 600;">A</div>
                <h3 style="font-weight: 600; color: var(--gray-800);">Disply</h3>
                <p style="color: var(--gray-500); font-size: 14px;">Admin Portal</p>
            </div>

            <!-- Menu Navigasi -->
            <div style="margin-bottom: 30px;">
                <p style="font-size: 12px; text-transform: uppercase; color: var(--gray-500); margin-bottom: 12px; letter-spacing: 0.5px;">Dashboard</p>
                
                <a href="{{ route('admin.dashboard') }}" style="display: flex; align-items: center; gap: 12px; padding: 12px; background: rgba(67, 97, 238, 0.1); color: var(--primary); border-radius: var(--radius); text-decoration: none; margin-bottom: 4px; font-weight: 500;">
                    <i class="fas fa-chart-pie" style="width: 20px;"></i>
                    <span>Dashboard</span>
                </a>
                
                <a href="{{ route('admin.blog.index') }}" style="display: flex; align-items: center; gap: 12px; padding: 12px; color: var(--gray-600); border-radius: var(--radius); text-decoration: none; margin-bottom: 4px; transition: all 0.2s;">
                    <i class="fas fa-blog" style="width: 20px;"></i>
                    <span>Blog</span>
                </a>
                
                <a href="{{ route('admin.events.index') }}" style="display: flex; align-items: center; gap: 12px; padding: 12px; color: var(--gray-600); border-radius: var(--radius); text-decoration: none; margin-bottom: 4px; transition: all 0.2s;">
                    <i class="fas fa-calendar-alt" style="width: 20px;"></i>
                    <span>Event</span>
                </a>
                
                <a href="{{ route('admin.casestudies.index') }}" style="display: flex; align-items: center; gap: 12px; padding: 12px; color: var(--gray-600); border-radius: var(--radius); text-decoration: none; transition: all 0.2s;">
                    <i class="fas fa-file-alt" style="width: 20px;"></i>
                    <span>Case Study</span>
                </a>
            </div>

            <!-- User Info -->
            <div style="margin-top: 30px; padding-top: 24px; border-top: 1px solid var(--gray-200);">
                <div style="display: flex; align-items: center; gap: 12px;">
                    <div style="width: 40px; height: 40px; border-radius: 50%; background: linear-gradient(145deg, var(--primary) 0%, #7209b7 100%); display: flex; align-items: center; justify-content: center; color: white;">A</div>
                    <div>
                        <p style="font-weight: 600; color: var(--gray-800);">Admin User</p>
                        <p style="font-size: 12px; color: var(--gray-500);">Super Admin</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- MAIN CONTENT -->
        <div style="flex: 1;">
            <!-- Page Header -->
            <div style="margin-bottom: 24px;">
                <h1 style="font-size: 28px; font-weight: 700; color: var(--gray-800); letter-spacing: -0.5px;">Admin Dashboard</h1>
                <p style="color: var(--gray-500); margin-top: 4px;">Overview & key metrics — perusahaan</p>
            </div>

            <!-- Dashboard Cards Grid -->
            <div class="dashboard-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; margin-bottom: 30px;">
                <!-- Blog Card -->
                <div style="background: white; border-radius: var(--radius-lg); padding: 20px; box-shadow: var(--shadow);">
                    <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 15px;">
                        <div style="width: 48px; height: 48px; border-radius: 12px; background: rgba(16, 185, 129, 0.1); color: var(--success); display: flex; align-items: center; justify-content: center; font-size: 24px;">
                            <i class="fas fa-blog"></i>
                        </div>
                        <h3 style="font-size: 18px; font-weight: 600;">Blogs</h3>
                    </div>
                    <div style="font-size: 32px; font-weight: 700; color: var(--gray-800); margin-bottom: 8px;">{{ $blogTotal }}</div>
                    <div style="color: var(--gray-600); margin-bottom: 8px;">Published: {{ $blogPublished }} | Draft: {{ $blogDrafts }}</div>
                    <div style="display: flex; align-items: center; gap: 6px; color: var(--gray-500);">
                        <i class="fas fa-eye"></i>
                        <span>{{ $blogViews }} views</span>
                    </div>
                </div>

                <!-- Events Card -->
                <div style="background: white; border-radius: var(--radius-lg); padding: 20px; box-shadow: var(--shadow);">
                    <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 15px;">
                        <div style="width: 48px; height: 48px; border-radius: 12px; background: rgba(239, 71, 111, 0.1); color: var(--danger); display: flex; align-items: center; justify-content: center; font-size: 24px;">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <h3 style="font-size: 18px; font-weight: 600;">Events</h3>
                    </div>
                    <div style="font-size: 32px; font-weight: 700; color: var(--gray-800); margin-bottom: 8px;">{{ $eventsTotal }}</div>
                    <div style="color: var(--gray-600); margin-bottom: 8px;">Published: {{ $eventsPublished }} | Draft: {{ $eventsDrafts }}</div>
                    <div style="display: flex; align-items: center; gap: 6px; color: var(--gray-500);">
                        <i class="fas fa-eye"></i>
                        <span>{{ $eventsViews }} views</span>
                    </div>
                </div>

                <!-- Case Studies Card -->
                <div style="background: white; border-radius: var(--radius-lg); padding: 20px; box-shadow: var(--shadow);">
                    <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 15px;">
                        <div style="width: 48px; height: 48px; border-radius: 12px; background: rgba(255, 209, 102, 0.1); color: var(--warning); display: flex; align-items: center; justify-content: center; font-size: 24px;">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <h3 style="font-size: 18px; font-weight: 600;">Case Studies</h3>
                    </div>
                    <div style="font-size: 32px; font-weight: 700; color: var(--gray-800); margin-bottom: 8px;">{{ $casestudiesTotal }}</div>
                    <div style="color: var(--gray-600); margin-bottom: 8px;">Published: {{ $casestudiesPublished }} | Draft: {{ $casestudiesDrafts }}</div>
                    <div style="display: flex; align-items: center; gap: 6px; color: var(--gray-500);">
                        <i class="fas fa-eye"></i>
                        <span>{{ $casestudiesViews }} views</span>
                    </div>
                </div>

                <!-- Total Views Card -->
                <div style="background: white; border-radius: var(--radius-lg); padding: 20px; box-shadow: var(--shadow);">
                    <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 15px;">
                        <div style="width: 48px; height: 48px; border-radius: 12px; background: rgba(67, 97, 238, 0.1); color: var(--primary); display: flex; align-items: center; justify-content: center; font-size: 24px;">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3 style="font-size: 18px; font-weight: 600;">Total Views</h3>
                    </div>
                    <div style="font-size: 32px; font-weight: 700; color: var(--gray-800); margin-bottom: 8px;">{{ $totalViews }}</div>
                    <div style="color: var(--gray-600);">All content</div>
                </div>
            </div>

            <!-- RECENT SECTION -->
            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px;">
                <!-- Recent Blogs -->
                <div style="background: white; border-radius: var(--radius-lg); padding: 20px; box-shadow: var(--shadow);">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
                        <h3 style="font-size: 16px; font-weight: 600;">Recent Blogs</h3>
                        <span style="background: var(--gray-100); padding: 4px 10px; border-radius: 20px; font-size: 12px;">{{ $blogTotal }} total</span>
                    </div>
                    
                    @forelse($recentBlogs as $blog)
                    <div style="padding: 12px; border-bottom: 1px solid var(--gray-200);">
                        <div style="font-weight: 600; margin-bottom: 4px;">{{ Str::limit($blog->title, 50) }}</div>
                        <div style="display: flex; align-items: center; gap: 12px; font-size: 12px; color: var(--gray-500);">
                            <span>{{ $blog->created_at->format('d M Y') }}</span>
                            <span>{{ $blog->views }} views</span>
                        </div>
                    </div>
                    @empty
                    <div style="padding: 32px; text-align: center; border: 1px dashed var(--gray-300); border-radius: var(--radius); color: var(--gray-500);">
                        <i class="fas fa-blog" style="font-size: 32px; margin-bottom: 8px; opacity: 0.5;"></i>
                        <p>Belum ada blog</p>
                        <a href="{{ route('admin.blog.create') }}" style="display: inline-block; margin-top: 12px; color: var(--primary); text-decoration: none; font-size: 14px;">Tulis blog pertama →</a>
                    </div>
                    @endforelse
                </div>

                <!-- Recent Events -->
                <div style="background: white; border-radius: var(--radius-lg); padding: 20px; box-shadow: var(--shadow);">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
                        <h3 style="font-size: 16px; font-weight: 600;">Recent Events</h3>
                        <span style="background: var(--gray-100); padding: 4px 10px; border-radius: 20px; font-size: 12px;">{{ $eventsTotal }} total</span>
                    </div>
                    
                    @forelse($recentEvents as $event)
                    <div style="padding: 12px; border-bottom: 1px solid var(--gray-200);">
                        <div style="font-weight: 600; margin-bottom: 4px;">{{ Str::limit($event->title, 50) }}</div>
                        <div style="display: flex; align-items: center; gap: 12px; font-size: 12px; color: var(--gray-500);">
                            <span>{{ $event->created_at->format('d M Y') }}</span>
                            <span>{{ $event->views }} views</span>
                        </div>
                    </div>
                    @empty
                    <div style="padding: 32px; text-align: center; border: 1px dashed var(--gray-300); border-radius: var(--radius); color: var(--gray-500);">
                        <i class="fas fa-calendar-times" style="font-size: 32px; margin-bottom: 8px; opacity: 0.5;"></i>
                        <p>Belum ada event</p>
                        <a href="{{ route('admin.events.create') }}" style="display: inline-block; margin-top: 12px; color: var(--primary); text-decoration: none; font-size: 14px;">Buat event baru →</a>
                    </div>
                    @endforelse
                </div>

                <!-- Recent Case Studies -->
                <div style="background: white; border-radius: var(--radius-lg); padding: 20px; box-shadow: var(--shadow);">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
                        <h3 style="font-size: 16px; font-weight: 600;">Recent Case Studies</h3>
                        <span style="background: var(--gray-100); padding: 4px 10px; border-radius: 20px; font-size: 12px;">{{ $casestudiesTotal }} total</span>
                    </div>
                    
                    @forelse($recentCaseStudies as $case)
                    <div style="padding: 12px; border-bottom: 1px solid var(--gray-200);">
                        <div style="font-weight: 600; margin-bottom: 4px;">{{ Str::limit($case->title, 50) }}</div>
                        <div style="display: flex; align-items: center; gap: 12px; font-size: 12px; color: var(--gray-500);">
                            <span>{{ $case->created_at->format('d M Y') }}</span>
                            <span>{{ $case->views }} views</span>
                        </div>
                    </div>
                    @empty
                    <div style="padding: 32px; text-align: center; border: 1px dashed var(--gray-300); border-radius: var(--radius); color: var(--gray-500);">
                        <i class="fas fa-file-excel" style="font-size: 32px; margin-bottom: 8px; opacity: 0.5;"></i>
                        <p>Belum ada case study</p>
                        <a href="{{ route('admin.casestudies.create') }}" style="display: inline-block; margin-top: 12px; color: var(--primary); text-decoration: none; font-size: 14px;">Buat case study baru →</a>
                    </div>
                    @endforelse
                </div>
            </div>

            <!-- Quick Actions -->
            <div style="background: white; border-radius: var(--radius-lg); padding: 24px; box-shadow: var(--shadow); margin-top: 30px;">
                <h3 style="font-size: 18px; font-weight: 600; color: var(--gray-800); margin-bottom: 20px; display: flex; align-items: center; gap: 8px;">
                    <i class="fas fa-bolt" style="color: var(--primary);"></i>
                    Quick Actions
                </h3>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 16px;">
                    <a href="{{ route('admin.blog.create') }}" style="display: flex; align-items: center; gap: 12px; padding: 16px; background: var(--gray-50); border-radius: var(--radius); text-decoration: none; color: var(--gray-700); transition: all 0.2s; border: 1px solid var(--gray-200);">
                        <i class="fas fa-pen" style="font-size: 20px; color: var(--primary);"></i>
                        <span style="font-weight: 500;">New Blog Post</span>
                    </a>
                    <a href="{{ route('admin.events.create') }}" style="display: flex; align-items: center; gap: 12px; padding: 16px; background: var(--gray-50); border-radius: var(--radius); text-decoration: none; color: var(--gray-700); transition: all 0.2s; border: 1px solid var(--gray-200);">
                        <i class="fas fa-calendar-plus" style="font-size: 20px; color: var(--primary);"></i>
                        <span style="font-weight: 500;">New Event</span>
                    </a>
                    <a href="{{ route('admin.casestudies.create') }}" style="display: flex; align-items: center; gap: 12px; padding: 16px; background: var(--gray-50); border-radius: var(--radius); text-decoration: none; color: var(--gray-700); transition: all 0.2s; border: 1px solid var(--gray-200);">
                        <i class="fas fa-file-medical" style="font-size: 20px; color: var(--primary);"></i>
                        <span style="font-weight: 500;">New Case Study</span>
                    </a>
                    <a href="{{ route('admin.analytics') }}" style="display: flex; align-items: center; gap: 12px; padding: 16px; background: var(--gray-50); border-radius: var(--radius); text-decoration: none; color: var(--gray-700); transition: all 0.2s; border: 1px solid var(--gray-200);">
                        <i class="fas fa-chart-line" style="font-size: 20px; color: var(--primary);"></i>
                        <span style="font-weight: 500;">View Analytics</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection