@extends('layouts.app')

@section('title', 'Edit Blog Post')

@section('content')
    <!-- Back Button -->
    <div style="margin-bottom: 24px;">
        <a href="{{ route('admin.blog.index') }}" style="color: var(--gray-600); text-decoration: none; display: inline-flex; align-items: center; gap: 8px; font-size: 14px;">
            <i class="fas fa-arrow-left"></i>
            <span>Back to Blog</span>
        </a>
    </div>

    <!-- Header -->
    <div style="margin-bottom: 24px;">
        <h1 style="font-size: 28px; font-weight: 700; color: var(--gray-800); letter-spacing: -0.5px;">Edit Blog Post</h1>
        <p style="color: var(--gray-500); margin-top: 4px;">Update the form below to edit blog post</p>
    </div>

    <!-- Form Card -->
    <div style="background: white; border-radius: var(--radius-lg); padding: 32px; box-shadow: var(--shadow);">
        <form action="{{ route('admin.blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Image Upload -->
            <div style="margin-bottom: 24px;">
                <label style="display: block; font-weight: 600; color: var(--gray-700); margin-bottom: 8px;">
                    Image
                </label>
                
                @if($blog->image)
                <div style="margin-bottom: 12px;">
                    <img src="{{ asset('storage/'.$blog->image) }}" alt="" style="max-width: 200px; border-radius: var(--radius);">
                </div>
                @endif
                
                <input type="file" name="image" accept="image/*" style="width: 100%; padding: 8px; border: 1px solid var(--gray-300); border-radius: var(--radius);">
                <p style="color: var(--gray-500); font-size: 12px; margin-top: 4px;">Kosongkan jika tidak ingin mengubah gambar</p>
            </div>

            <!-- Title -->
            <div style="margin-bottom: 24px;">
                <label style="display: block; font-weight: 600; color: var(--gray-700); margin-bottom: 8px;">
                    Judul <span style="color: red;">*</span>
                </label>
                <input type="text" name="title" value="{{ $blog->title }}" style="width: 100%; padding: 12px; border: 1px solid var(--gray-300); border-radius: var(--radius);" required>
            </div>

            <!-- Subtitle -->
            <div style="margin-bottom: 24px;">
                <label style="display: block; font-weight: 600; color: var(--gray-700); margin-bottom: 8px;">
                    Subjudul
                </label>
                <input type="text" name="subtitle" value="{{ $blog->subtitle }}" style="width: 100%; padding: 12px; border: 1px solid var(--gray-300); border-radius: var(--radius);">
            </div>

            <!-- Deskripsi -->
            <div style="margin-bottom: 24px;">
                <label style="display: block; font-weight: 600; color: var(--gray-700); margin-bottom: 8px;">
                    Deskripsi <span style="color: red;">*</span>
                </label>
                <div style="border: 1px solid var(--gray-300); border-radius: var(--radius); overflow: hidden;">
                    <!-- Toolbar -->
                    <div style="background: var(--gray-100); padding: 8px; border-bottom: 1px solid var(--gray-300); display: flex; gap: 5px;">
                        <button type="button" onclick="formatText('bold')" style="padding: 5px 10px; background: white; border: 1px solid var(--gray-300); border-radius: 4px; cursor: pointer; font-weight: bold;">B</button>
                        <button type="button" onclick="formatText('italic')" style="padding: 5px 10px; background: white; border: 1px solid var(--gray-300); border-radius: 4px; cursor: pointer; font-style: italic;">I</button>
                        <button type="button" onclick="formatText('underline')" style="padding: 5px 10px; background: white; border: 1px solid var(--gray-300); border-radius: 4px; cursor: pointer; text-decoration: underline;">U</button>
                        <button type="button" onclick="formatText('insertUnorderedList')" style="padding: 5px 10px; background: white; border: 1px solid var(--gray-300); border-radius: 4px; cursor: pointer;">≡</button>
                        <button type="button" onclick="formatText('insertOrderedList')" style="padding: 5px 10px; background: white; border: 1px solid var(--gray-300); border-radius: 4px; cursor: pointer;">≡</button>
                        <button type="button" onclick="formatText('outdent')" style="padding: 5px 10px; background: white; border: 1px solid var(--gray-300); border-radius: 4px; cursor: pointer;">Tₓ</button>
                    </div>
                    <!-- Textarea -->
                    <textarea name="content" id="content" rows="10" style="width: 100%; padding: 12px; border: none; outline: none; font-size: 15px;" required>{{ $blog->content }}</textarea>
                </div>
            </div>

            <!-- Meta Description -->
            <div style="margin-bottom: 24px;">
                <label style="display: block; font-weight: 600; color: var(--gray-700); margin-bottom: 8px;">
                    Meta Deskripsi
                </label>
                <textarea name="meta_description" rows="3" style="width: 100%; padding: 12px; border: 1px solid var(--gray-300); border-radius: var(--radius);">{{ $blog->meta_description }}</textarea>
            </div>

            <!-- Meta Keywords -->
            <div style="margin-bottom: 24px;">
                <label style="display: block; font-weight: 600; color: var(--gray-700); margin-bottom: 8px;">
                    Meta Keyword
                </label>
                @php
                    $keywords = $blog->meta_keywords ? implode(',', json_decode($blog->meta_keywords)) : '';
                @endphp
                <input type="text" name="meta_keywords" value="{{ $keywords }}" placeholder="Pisahkan dengan koma (contoh: teknologi, digital, display)" style="width: 100%; padding: 12px; border: 1px solid var(--gray-300); border-radius: var(--radius);">
            </div>

            <!-- Status -->
            <div style="margin-bottom: 24px;">
                <label style="display: block; font-weight: 600; color: var(--gray-700); margin-bottom: 8px;">
                    Status
                </label>
                <select name="status" style="width: 100%; padding: 12px; border: 1px solid var(--gray-300); border-radius: var(--radius);">
                    <option value="draft" {{ $blog->status == 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="published" {{ $blog->status == 'published' ? 'selected' : '' }}>Published</option>
                </select>
            </div>

            <!-- Submit Button -->
            <div style="display: flex; gap: 12px; justify-content: flex-end;">
                <a href="{{ route('admin.blog.index') }}" style="padding: 12px 24px; background: white; border: 1px solid var(--gray-300); border-radius: var(--radius); color: var(--gray-700); text-decoration: none;">Cancel</a>
                <button type="submit" style="padding: 12px 32px; background: var(--primary); color: white; border: none; border-radius: var(--radius); cursor: pointer;">Update</button>
            </div>
        </form>
    </div>

    <script>
        function formatText(command) {
            document.execCommand(command, false, null);
            document.getElementById('content').focus();
        }
    </script>
@endsection