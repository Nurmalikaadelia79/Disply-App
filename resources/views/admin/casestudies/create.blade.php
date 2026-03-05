@extends('layouts.app')

@section('title', 'Create Case Study')

@section('content')
    <!-- Back Button -->
    <div style="margin-bottom: 24px;">
        <a href="{{ route('admin.casestudies.index') }}" style="color: var(--gray-600); text-decoration: none; display: inline-flex; align-items: center; gap: 8px; font-size: 14px;">
            <i class="fas fa-arrow-left"></i>
            <span>Back to Case Studies</span>
        </a>
    </div>

    <!-- Header -->
    <div style="margin-bottom: 24px;">
        <h1 style="font-size: 28px; font-weight: 700; color: var(--gray-800); letter-spacing: -0.5px;">Create New Case Study</h1>
        <p style="color: var(--gray-500); margin-top: 4px;">Fill in the form below to create a new case study</p>
    </div>

    <!-- Form Card -->
    <div style="background: white; border-radius: var(--radius-lg); padding: 32px; box-shadow: var(--shadow);">
        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Image Upload -->
            <div style="margin-bottom: 24px;">
                <label style="display: block; font-weight: 600; color: var(--gray-700); margin-bottom: 8px;">
                    Image <span style="color: var(--gray-500); font-weight: 400; font-size: 13px;">(Pilih gambar akan otomatis ter-upload)</span>
                </label>
                <div style="border: 2px dashed var(--gray-300); border-radius: var(--radius); padding: 32px; text-align: center; background: var(--gray-50); cursor: pointer;">
                    <i class="fas fa-cloud-upload-alt" style="font-size: 32px; color: var(--gray-400); margin-bottom: 8px;"></i>
                    <p style="color: var(--gray-600); margin-bottom: 4px;">Click to upload or drag and drop</p>
                    <p style="color: var(--gray-500); font-size: 12px;">PNG, JPG, GIF up to 10MB</p>
                    <input type="file" name="image" style="display: none;">
                </div>
            </div>

            <!-- Client -->
            <div style="margin-bottom: 24px;">
                <label style="display: block; font-weight: 600; color: var(--gray-700); margin-bottom: 8px;">
                    Client <span style="color: var(--danger);">*</span>
                </label>
                <input type="text" name="client" placeholder="Client name" 
                       style="width: 100%; padding: 12px; border: 1px solid var(--gray-300); border-radius: var(--radius); font-size: 15px;">
            </div>

            <!-- Title -->
            <div style="margin-bottom: 24px;">
                <label style="display: block; font-weight: 600; color: var(--gray-700); margin-bottom: 8px;">
                    Judul <span style="color: var(--danger);">*</span>
                </label>
                <input type="text" name="title" placeholder="Case study title" 
                       style="width: 100%; padding: 12px; border: 1px solid var(--gray-300); border-radius: var(--radius); font-size: 15px;">
            </div>

            <!-- Subtitle -->
            <div style="margin-bottom: 24px;">
                <label style="display: block; font-weight: 600; color: var(--gray-700); margin-bottom: 8px;">
                    Subjudul
                </label>
                <input type="text" name="subtitle" placeholder="Subjudul" 
                       style="width: 100%; padding: 12px; border: 1px solid var(--gray-300); border-radius: var(--radius); font-size: 15px;">
            </div>

            <!-- Content -->
            <div style="margin-bottom: 24px;">
                <label style="display: block; font-weight: 600; color: var(--gray-700); margin-bottom: 8px;">
                    Deskripsi <span style="color: var(--danger);">*</span>
                </label>
                <textarea name="content" rows="8" placeholder="Write case study content here..." 
                          style="width: 100%; padding: 12px; border: 1px solid var(--gray-300); border-radius: var(--radius); font-size: 15px;"></textarea>
            </div>

            <!-- Results -->
            <div style="margin-bottom: 24px;">
                <label style="display: block; font-weight: 600; color: var(--gray-700); margin-bottom: 8px;">
                    Key Results
                </label>
                <textarea name="results" rows="4" placeholder="Key results and metrics..." 
                          style="width: 100%; padding: 12px; border: 1px solid var(--gray-300); border-radius: var(--radius); font-size: 15px;"></textarea>
            </div>

            <!-- Meta Description -->
            <div style="margin-bottom: 24px;">
                <label style="display: block; font-weight: 600; color: var(--gray-700); margin-bottom: 8px;">
                    Meta Deskripsi
                </label>
                <textarea name="meta_description" rows="3" placeholder="Meta deskripsi" 
                          style="width: 100%; padding: 12px; border: 1px solid var(--gray-300); border-radius: var(--radius); font-size: 15px;"></textarea>
            </div>

            <!-- Meta Keywords -->
            <div style="margin-bottom: 24px;">
                <label style="display: block; font-weight: 600; color: var(--gray-700); margin-bottom: 8px;">
                    Meta Keyword <span style="color: var(--gray-500); font-weight: 400; font-size: 13px;">(Tambah tag dan tekan Enter)</span>
                </label>
                <div style="border: 1px solid var(--gray-300); border-radius: var(--radius); padding: 8px; background: white;">
                    <div style="display: flex; flex-wrap: wrap; gap: 8px; margin-bottom: 8px;">
                        <span style="background: var(--gray-100); padding: 4px 10px; border-radius: 30px; display: inline-flex; align-items: center; gap: 6px;">
                            <span>casestudy</span>
                            <i class="fas fa-times" style="cursor: pointer; font-size: 12px; color: var(--gray-500);"></i>
                        </span>
                    </div>
                    <input type="text" placeholder="Tekan Enter atau koma untuk menambah tag. Pishahkan banyak tag dengan Enter." 
                           style="width: 100%; border: none; outline: none; padding: 4px; font-size: 14px;">
                </div>
                <p style="color: var(--gray-500); font-size: 12px; margin-top: 4px;">Tekan Enter atau koma untuk menambah tag. Pisahkan banyak tag dengan Enter.</p>
            </div>

            <!-- Submit Button -->
            <div style="display: flex; gap: 12px; justify-content: flex-end; margin-top: 32px;">
                <a href="{{ route('admin.casestudies.index') }}" style="padding: 12px 24px; background: white; border: 1px solid var(--gray-300); border-radius: var(--radius); color: var(--gray-700); text-decoration: none;">Cancel</a>
                <button type="submit" style="padding: 12px 32px; background: var(--primary); color: white; border: none; border-radius: var(--radius); font-weight: 500; cursor: pointer;">
                    Simpan
                </button>
            </div>
        </form>
    </div>
@endsection