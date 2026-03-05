@extends('layouts.app')

@section('title', 'Create Blog Post')

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
        <h1 style="font-size: 28px; font-weight: 700; color: var(--gray-800); letter-spacing: -0.5px;">Create New Blog Post</h1>
        <p style="color: var(--gray-500); margin-top: 4px;">Fill in the form below to create a new blog post</p>
    </div>

    <!-- Form Card -->
    <div style="background: white; border-radius: var(--radius-lg); padding: 32px; box-shadow: var(--shadow);">
        <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data" id="blogForm">
            @csrf

            <!-- Image Upload (BISA DI KLIK) -->
            <div style="margin-bottom: 24px;">
                <label style="display: block; font-weight: 600; color: var(--gray-700); margin-bottom: 8px;">
                    Image <span style="color: var(--gray-500); font-weight: 400; font-size: 13px;">(Pilih gambar akan otomatis ter-upload)</span>
                </label>
                <div id="dropzone" onclick="document.getElementById('fileInput').click()" style="border: 2px dashed var(--gray-300); border-radius: var(--radius); padding: 40px; text-align: center; background: var(--gray-50); cursor: pointer;">
                    <i class="fas fa-cloud-upload-alt" style="font-size: 32px; color: var(--gray-400); margin-bottom: 8px;"></i>
                    <p style="color: var(--gray-600); margin-bottom: 4px;">Click to upload or drag and drop</p>
                    <p style="color: var(--gray-500); font-size: 12px;">PNG, JPG, GIF up to 10MB</p>
                    <input type="file" id="fileInput" name="image" accept="image/*" style="display: none;" onchange="previewImage(this)">
                </div>
                <div id="preview" style="margin-top: 12px; display: none;">
                    <img src="" alt="Preview" style="max-width: 200px; border-radius: var(--radius);">
                </div>
            </div>

            <!-- Judul -->
            <div style="margin-bottom: 24px;">
                <label style="display: block; font-weight: 600; color: var(--gray-700); margin-bottom: 8px;">
                    Judul <span style="color: red;">*</span>
                </label>
                <input type="text" name="title" placeholder="Judul" style="width: 100%; padding: 12px; border: 1px solid var(--gray-300); border-radius: var(--radius);" required>
            </div>

            <!-- Subjudul -->
            <div style="margin-bottom: 24px;">
                <label style="display: block; font-weight: 600; color: var(--gray-700); margin-bottom: 8px;">
                    Subjudul
                </label>
                <input type="text" name="subtitle" placeholder="Subjudul" style="width: 100%; padding: 12px; border: 1px solid var(--gray-300); border-radius: var(--radius);">
            </div>

            <!-- Deskripsi dengan Toolbar (BISA DI BOLD DLL) -->
            <div style="margin-bottom: 24px;">
                <label style="display: block; font-weight: 600; color: var(--gray-700); margin-bottom: 8px;">
                    Deskripsi <span style="color: red;">*</span>
                </label>
                <div style="border: 1px solid var(--gray-300); border-radius: var(--radius); overflow: hidden;">
                    <!-- Toolbar -->
                    <div style="background: white; padding: 8px; border-bottom: 1px solid var(--gray-300); display: flex; gap: 5px;">
                        <button type="button" onclick="formatText('bold')" style="padding: 5px 10px; background: white; border: 1px solid var(--gray-300); border-radius: 4px; cursor: pointer; font-weight: bold;">B</button>
                        <button type="button" onclick="formatText('italic')" style="padding: 5px 10px; background: white; border: 1px solid var(--gray-300); border-radius: 4px; cursor: pointer; font-style: italic;">I</button>
                        <button type="button" onclick="formatText('underline')" style="padding: 5px 10px; background: white; border: 1px solid var(--gray-300); border-radius: 4px; cursor: pointer; text-decoration: underline;">U</button>
                        <button type="button" onclick="formatText('insertUnorderedList')" style="padding: 5px 10px; background: white; border: 1px solid var(--gray-300); border-radius: 4px; cursor: pointer;">≡</button>
                        <button type="button" onclick="formatText('insertOrderedList')" style="padding: 5px 10px; background: white; border: 1px solid var(--gray-300); border-radius: 4px; cursor: pointer;">≡</button>
                        <button type="button" onclick="formatText('outdent')" style="padding: 5px 10px; background: white; border: 1px solid var(--gray-300); border-radius: 4px; cursor: pointer;">Tₓ</button>
                    </div>
                    <!-- Content Editable DIV -->
                    <div id="content" contenteditable="true" style="width: 100%; min-height: 200px; padding: 12px; border: none; outline: none; font-size: 15px; font-family: 'Inter', sans-serif; background: white;"></div>
                    <input type="hidden" name="content" id="content-hidden">
                </div>
            </div>

            <!-- Meta Deskripsi -->
            <div style="margin-bottom: 24px;">
                <label style="display: block; font-weight: 600; color: var(--gray-700); margin-bottom: 8px;">
                    Meta Deskripsi
                </label>
                <textarea name="meta_description" rows="3" placeholder="Meta deskripsi" style="width: 100%; padding: 12px; border: 1px solid var(--gray-300); border-radius: var(--radius);"></textarea>
            </div>

            <!-- Meta Keyword dengan Tag System -->
            <div style="margin-bottom: 24px;">
                <label style="display: block; font-weight: 600; color: var(--gray-700); margin-bottom: 8px;">
                    Meta Keyword <span style="color: var(--gray-500); font-weight: 400; font-size: 13px;">(Tambah tag dan tekan Enter)</span>
                </label>
                <div style="border: 1px solid var(--gray-300); border-radius: var(--radius); padding: 8px; background: white;">
                    <div id="tag-container" style="display: flex; flex-wrap: wrap; gap: 8px; margin-bottom: 8px;"></div>
                    <input type="text" id="tag-input" placeholder="Tekan Enter atau koma untuk menambah tag. Pisahkan banyak tag dengan Enter." 
                           style="width: 100%; border: none; outline: none; padding: 4px; font-size: 14px;">
                </div>
                <input type="hidden" name="meta_keywords" id="meta_keywords">
                <p style="color: var(--gray-500); font-size: 12px; margin-top: 4px;">Tekan Enter atau koma untuk menambah tag. Pisahkan banyak tag dengan Enter.</p>
            </div>

            <!-- Status -->
            <div style="margin-bottom: 24px;">
                <label style="display: block; font-weight: 600; color: var(--gray-700); margin-bottom: 8px;">
                    Status
                </label>
                <select name="status" style="width: 100%; padding: 12px; border: 1px solid var(--gray-300); border-radius: var(--radius);">
                    <option value="draft">Draft</option>
                    <option value="published" selected>Published</option>
                </select>
            </div>

            <!-- Submit Button -->
            <div style="display: flex; gap: 12px; justify-content: flex-end;">
                <a href="{{ route('admin.blog.index') }}" style="padding: 12px 24px; background: white; border: 1px solid var(--gray-300); border-radius: var(--radius); color: var(--gray-700); text-decoration: none;">Cancel</a>
                <button type="submit" style="padding: 12px 32px; background: var(--primary); color: white; border: none; border-radius: var(--radius); cursor: pointer;">Simpan</button>
            </div>
        </form>
    </div>

    <script>
        // Fungsi untuk format teks di contenteditable
        function formatText(command) {
            document.execCommand(command, false, null);
            document.getElementById('content').focus();
        }

        // Preview image sebelum upload
        function previewImage(input) {
            const preview = document.getElementById('preview');
            const previewImg = preview.querySelector('img');
            
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    previewImg.src = e.target.result;
                    preview.style.display = 'block';
                }
                
                reader.readAsDataURL(input.files[0]);
            }
        }

        // Drag & drop untuk image
        const dropzone = document.getElementById('dropzone');
        const fileInput = document.getElementById('fileInput');

        dropzone.addEventListener('dragover', (e) => {
            e.preventDefault();
            dropzone.style.borderColor = 'var(--primary)';
            dropzone.style.background = 'var(--gray-100)';
        });

        dropzone.addEventListener('dragleave', () => {
            dropzone.style.borderColor = 'var(--gray-300)';
            dropzone.style.background = 'var(--gray-50)';
        });

        dropzone.addEventListener('drop', (e) => {
            e.preventDefault();
            dropzone.style.borderColor = 'var(--gray-300)';
            dropzone.style.background = 'var(--gray-50)';
            
            const file = e.dataTransfer.files[0];
            if (file && file.type.startsWith('image/')) {
                fileInput.files = e.dataTransfer.files;
                previewImage(fileInput);
            }
        });

        // Tag System
        const tagInput = document.getElementById('tag-input');
        const tagContainer = document.getElementById('tag-container');
        const metaKeywords = document.getElementById('meta_keywords');
        let tags = [];

        function addTag(text) {
            text = text.trim();
            if (text && !tags.includes(text)) {
                tags.push(text);
                renderTags();
                updateInput();
            }
        }

        function removeTag(index) {
            tags.splice(index, 1);
            renderTags();
            updateInput();
        }

        function renderTags() {
            tagContainer.innerHTML = '';
            tags.forEach((tag, index) => {
                const tagEl = document.createElement('span');
                tagEl.style.cssText = 'background: var(--gray-100); padding: 4px 10px; border-radius: 30px; display: inline-flex; align-items: center; gap: 6px; font-size: 13px;';
                tagEl.innerHTML = `
                    <span>${tag}</span>
                    <i class="fas fa-times" style="cursor: pointer; font-size: 12px; color: var(--gray-500);" onclick="removeTag(${index})"></i>
                `;
                tagContainer.appendChild(tagEl);
            });
        }

        function updateInput() {
            metaKeywords.value = JSON.stringify(tags);
        }

        tagInput.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' || e.key === ',') {
                e.preventDefault();
                if (tagInput.value.trim()) {
                    addTag(tagInput.value);
                    tagInput.value = '';
                }
            }
        });

        tagInput.addEventListener('blur', () => {
            if (tagInput.value.trim()) {
                addTag(tagInput.value);
                tagInput.value = '';
            }
        });

        // Form submission - ambil content dari contenteditable
        document.getElementById('blogForm').addEventListener('submit', function(e) {
            const content = document.getElementById('content').innerHTML;
            document.getElementById('content-hidden').value = content;
            updateInput();
        });

        // Biar contenteditable bisa diisi dari awal
        document.getElementById('content').innerHTML = '';
    </script>

    <style>
        /* Style untuk contenteditable */
        #content {
            min-height: 200px;
            resize: vertical;
            overflow-y: auto;
            line-height: 1.6;
        }
        
        #content:focus {
            outline: none;
        }
        
        #content p {
            margin-bottom: 10px;
        }
        
        #content b, #content strong {
            font-weight: bold;
        }
        
        #content i, #content em {
            font-style: italic;
        }
        
        #content u {
            text-decoration: underline;
        }
        
        #content ul, #content ol {
            padding-left: 30px;
            margin-bottom: 10px;
        }
    </style>
@endsection