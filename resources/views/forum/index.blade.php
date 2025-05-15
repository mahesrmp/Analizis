@extends('layout')

@section('content')
<div class="max-w-3xl mx-auto p-4">
    <h2 class="text-xl font-semibold mb-4 text-center">Forum Diskusi</h2>
    
    <!-- Form Buat Diskusi Baru -->
    <div class="bg-white p-6 shadow mb-6 rounded-lg">
        <h3 class="font-bold mb-4">Buat Diskusi Baru</h3>
        
        <form action="{{ route('forum.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="category" class="block text-sm mb-1">Kategori:</label>
                <input type="text" name="category" id="category" class="w-full border rounded p-2" required>
            </div>
            
            <div class="mb-4">
                <label for="title" class="block text-sm mb-1">Judul Diskusi:</label>
                <input type="text" name="title" id="title" class="w-full border rounded p-2" required>
            </div>
            
            <div class="mb-4">
                <label for="content" class="block text-sm mb-1">Isi Diskusi:</label>
                <textarea name="content" id="content" rows="3" class="w-full border rounded p-2" required></textarea>
            </div>
            
            <div class="text-center">
                <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded">Kirim</button>
            </div>
        </form>
    </div>
    
    <!-- Diskusi Terbaru -->
    <h3 class="font-bold mb-4">Diskusi Terbaru</h3>
    
    @foreach ($discussions as $discussion)
        <div class="bg-white p-6 shadow mb-4 rounded-lg">
            <div class="text-sm text-gray-600 mb-1">Kategori: {{ $discussion->category }}</div>
            <h4 class="font-bold text-blue-500">{{ $discussion->title }}</h4>
            <p class="my-2">{{ $discussion->content }}</p>
            
            <div class="mt-3">
                <a href="{{ route('forum.show', $discussion->id) }}" class="bg-gray-200 text-gray-800 px-4 py-1 rounded text-sm">Balas</a>
            </div>
        </div>
    @endforeach
    
    @if(count($discussions) == 0)
        <div class="text-center text-gray-500 py-4">Belum ada diskusi.</div>
    @endif
</div>
@endsection