@extends('layouts.app')

@section('title', 'Events Management')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
        <h2>Events</h2>
        <a href="{{ route('admin.events.create') }}" style="background: var(--primary); color: white; padding: 10px 20px; border-radius: 8px; text-decoration: none;">
            <i class="fas fa-plus"></i> New Event
        </a>
    </div>
    
    <div class="content-card">
        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="border-bottom: 2px solid var(--gray-200);">
                    <th style="padding: 12px; text-align: left;">Event Name</th>
                    <th style="padding: 12px; text-align: left;">Date</th>
                    <th style="padding: 12px; text-align: left;">Status</th>
                    <th style="padding: 12px; text-align: left;">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="4" style="padding: 40px; text-align: center; color: var(--gray-500);">
                        No events yet.
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection