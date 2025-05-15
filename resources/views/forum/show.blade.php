@extends('layout')

@section('content')
    <div class="max-w-3xl mx-auto p-4">
        <h2 class="text-xl font-semibold mb-4 text-center">Forum Diskusi</h2>

        <div class="bg-white p-6 shadow rounded-lg mb-8">
            <!-- Main Discussion -->
            <div class="flex items-start mb-4">
                <div class="w-12 h-12 bg-blue-600 rounded-full flex-shrink-0 mr-3"></div>
                <div class="flex-grow">
                    <div class="font-medium">{{ $discussion->user->name }}</div>
                    <h3 class="text-blue-500 font-medium">{{ $discussion->title }}</h3>
                    <p class="text-gray-800 my-2">{{ $discussion->content }}</p>
                </div>
            </div>

            <!-- Replies -->
            @foreach ($discussion->replies as $reply)
                <div class="flex items-start mb-4 ml-6 mt-6">
                    <div
                        class="w-10 h-10 rounded-full flex-shrink-0 mr-3
                    @if ($loop->iteration == 1) bg-blue-600
                    @elseif($loop->iteration == 2)
                        bg-purple-600
                    @elseif($loop->iteration == 3)
                        bg-green-600
                    @else
                        bg-gray-600 @endif
                ">
                    </div>
                    <div class="flex-grow">
                        <div class="font-medium">
                            @if ($loop->iteration == 1)
                                {{ $reply->user->name }}
                            @elseif($loop->iteration == 2)
                                {{ $reply->user->name }}
                            @elseif($loop->iteration == 3)
                                {{ $reply->user->name }}
                            @else
                                {{ $reply->user->name }} {{ $loop->iteration }}
                            @endif
                        </div>
                        <p class="text-gray-800">{{ $reply->content }}</p>
                    </div>
                </div>
            @endforeach

            <!-- Reply Form -->
            <div class="border-t pt-4 mt-6">
                <form action="{{ route('forum.reply', $discussion->id) }}" method="POST" class="w-full">
                    @csrf
                    <textarea name="content" placeholder="Jawab Pesan..." class="w-full border border-gray-300 rounded-lg p-3 mb-3"
                        rows="3" required></textarea>
                    <div class="flex justify-end">
                        <a href="{{ route('forum.index') }}"
                            class="bg-gray-200 text-gray-800 px-4 py-2 rounded-lg mr-2 inline-block text-center">
                            Batal
                        </a>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Kirim</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
